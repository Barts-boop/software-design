<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
 //declaring of variables where the data coming from the html inputs stored.
 //$_POST is syntax used to get the value of the html inputs going to the PHP
 $price = $_POST["price"];
 $quantity = $_POST["quantity"];
 $discount = $_POST["discount"];
 $tax = $_POST["tax"];
 $shipping = $_POST["shipping"];
 $payments = $_POST["payments"];
 //creating formula needed for the computation
 $total = $price*$quantity;
 $total = $total+$shipping;
 $total = $total-$discount;
 $taxrate = $tax/100;
 $taxrate = $taxrate+1;
 $total = $total*$taxrate;
 $monthly = $total/$payments;
 $total = number_format($total,2);
 $monthly = number_format($monthly,2);
 //displaying of data using PHP
 print "You have selected to purchase: <br> <b> $quantity </b> widget(s) at
 <br> $<b>$price</b> price with a <br> $ <b> $shipping </b> shipping cost
 and a <br> <b> $tax </b> percent tax rate. <br>
 After your $<b> $discount </b> discount, the total cost is $<b> $total</b>.
 <br>
 Divided over <b> $payments</b> monthly payments, that would be $<b>
 $monthly </b>each.";
 ?>
</body>
</html>