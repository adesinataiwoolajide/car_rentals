<?php
session_start();
require_once("../../Dev/autoload.php");
require_once("../../connection/connection.php");
require_once("../../vendor/autoload.php");
require_once '../../Dev/general/all_purpose_class.php';
$order = new Order;
$car = new Car;
$all_purpose = new all_purpose($db);

$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
    die('No reference supplied');
}

$reg_number = $_SESSION['reg_number'];
$customer_id = $reg_number;

// initiate the Library's Paystack Object
$paystack = new Yabacon\Paystack('sk_test_d91ab575b866910aa0cfcc68910ff4011d044c9f');
try{
    $tranx = $paystack->transaction->verify([
        'reference'=> $reference, // unique to transactions
    ]);
} catch(\Yabacon\Paystack\Exception\ApiException $e){
    print_r($e->getResponseObject());
    die($e->getMessage());
}

if('success' === $tranx->data->status) {


    $order->updateOnlinePaymentStatus($customer_id, $reference);
    $_SESSION['success'] = "Transaction successful.";
    unset($_SESSION['cart']);
    unset($_SESSION['transactionId']);
    unset($_SESSION['paystackReference']);
    $all_purpose->redirect("../../my_bookings?registration_number=$reg_number");

}else{
    $_SESSION['error'] = "Unable to verify your transaction";
    $all_purpose->redirect("../../checkout");
}

?>