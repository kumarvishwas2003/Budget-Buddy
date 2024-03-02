<?php 
session_start();
include 'fpdf.php';
include 'C:\xampp\htdocs\Budget Buddy\connection.php';
// include 'C:\xampp\htdocs\Budget Buddy\getmonth.php';
$pdf = new FPDF();
$pdf->AddPage();
$user_entry = $_SESSION['username'];
$month = $_SESSION['month'];
$sql = "SELECT * FROM expense WHERE DATE_FORMAT(date, '%m') = '$month' AND user = '$user_entry'";
$result = $conn->query($sql);
//extra code
$sql_sum = "SELECT SUM(cost) AS total_sum FROM expense WHERE DATE_FORMAT(date, '%m') = '$month' && user='$user_entry'";
// Execute the query
$result_sum = mysqli_query($conn, $sql_sum);

// Check if the query executed successfully
if ($result_sum) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result_sum);
    
    // Total sum of the column
    $total_sum = $row['total_sum'];
    
    // Output the total sum
    // echo "Total Sum: " . $total_sum;
} else {
    // If the query fails, handle the error
    echo "Error: " . mysqli_error($conn);
}
//till here

// Define table headers
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'S no.', 1);
$pdf->Cell(50, 10, 'Item', 1);
$pdf->Cell(40, 10, 'Cost', 1);
$pdf->Cell(40, 10, 'Date', 1);
// $pdf->Cell(40, 10, 'Total', 1);

$pdf->Ln();

// Output fetched data to PDF
if ($result->num_rows > 0) {
    $sno = 0;
    while ($row = $result->fetch_assoc()) {
        $sno += 1;
        $pdf->Cell(30, 10, $sno, 1);
        $pdf->Cell(50, 10, $row['item'], 1);
        $pdf->Cell(40, 10, $row['cost'], 1);
        $pdf->Cell(40, 10, $row['date'], 1);
        // $pdf->Cell(40, 10, $total_sum, 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(160, 10, 'No data found', 1);
}
$pdf->Cell(160, 10, 'Total Sum: ' . $total_sum, 1);

$conn->close();

// Output PDF
 $filename = 'BudgetBuddy_' . $month. '.pdf';
 $pdf->Output('D', $filename);
?>
<!-- $pdf->Output('D', 'BudgetBuddy.pdf'); -->