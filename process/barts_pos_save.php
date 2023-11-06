<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$ItemName = $_POST['ItemName'];
$ItemQuantity = $_POST['Quantity'];
$ItemPrice = $_POST['ItemPrice'];
$DiscountAmount = $_POST['Discount'];
$DiscountedAmount = $_POST['Discounted'];
$TotalQuantity = $_POST['totalQuantity'];
$TotalDiscountedGiven = $_POST['totalDiscount'];
$DiscountOption = $_POST['discount_option'];
$TotalDiscounted = $_POST['totalDiscounted'];
$CashGiven = $_POST['Cash'];
$Change = $_POST['Change'];

//echo json_encode($fieldArray);
include 'db_connection.php';

$conn = OpenCon();
// save sales to database
$sql1 = "INSERT INTO salestbl(item_name,discount_option, quantity, price, discount_amount, discounted_amount, total_quantity, total_discount_given, total_discounted_amount, cash_given, customer_change)
VALUES('$ItemName','$DiscountOption','$ItemQuantity','$ItemPrice ',' $DiscountAmount',' $DiscountedAmount','$TotalQuantity', ' $TotalDiscountedGiven', '$TotalDiscounted', ' $CashGiven', '$Change')";
$conn->query($sql1);

CloseCon($conn);
echo json_encode([
'ok' => 1,
]);
}
?>