<?php
 
require_once('config.php');
 
// ==============================================================
// Final step: finalize the order in your database, show receipt
// ==============================================================
 
 
session_start();
$intent = \Stripe\PaymentIntent::retrieve($_SESSION['payment_intent_id']);
 
if ($intent->status !== 'succeeded') {
    die("Final order step reached, but PaymentIntent status is '{$intent->status}'");
}
// TODO: update your database now that the PaymentIntent is complete and your customer has paid
 
// TODO: demo only: reset the session
 $link_token = $_SESSION['link_token'];
 $_SESSION['link_token'] = null;
 $_SESSION['payment_intent_id'] = null;

include_once 'db-connect.php';
$sql = "SELECT * FROM orders WHERE link_token = '" . $link_token . "'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['project_name'];
    $email = $row['email'];
    $description = $row['description'];
    $item_price = $row['item_price'];
    $item_price_currency = $row['item_price_currency'];
    $paid_amount = $row['paid_amount'];
    $paid_amount_currency = $row['paid_amount_currency'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $phone = $row['phone'];
    $address = $row['address'];
    $address2 = $row['address2'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $country = $row['country'];
    $payment_status	 = $row['payment_status'];
    $packages = $row['packages'];
    $link_token = $row['link_token'];
    $sale_mail = $row['sales_email'];
    $transactionID = $row['txn_id'];
}


require 'sendPaymentMail.php';

 ?>





<!DOCTYPE html>
<html>
<head>
    <title>Payment web app solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	        		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
					<style type="text/css">
						
						body, *{
							font-family: 'Poppins', sans-serif;
						}
					</style>
</head>
<body>
<div class="container col-md-6 py-5">

	<img src="https://www.webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 300px;">
    <div class="status">
      
            <p>Payment successfully charged.</p>
            <p>A receipt of this transaction has been sent to your email address on file. </p>
            <p>Please feel free to send us an email at<a href="mailto:billing@webappsolution.org"> billing@webappsolution.org</a> or call us at +1 212 684 6931 for billing related queries.</p>
            <p>Thank you for choosing <a href="http://webappsolution.org/">web app solution</a>.</p>
            

    </div>
</div>
</body>
</html>
<?php } ?>