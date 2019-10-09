<?php
session_start();
require_once("../../Dev/autoload.php");
require_once("../../connection/connection.php");
require_once("../../vendor/autoload.php");
require_once '../../Dev/general/all_purpose_class.php';
$all_purpose = new all_purpose($db);
if(!isset($_SESSION['id'])){ ?>
    <script>
        window.location=('login');
    </script><?php 
    $_SESSION['error'] = "Please Register Or Login into Your Account"; 
}
    $order = new Order;
    $car = new Car;

    $_SESSION['paystackReference'] = bin2hex(random_bytes(10));
    $order->deleteOrders($_SESSION['transactionId']); // delete instance of this order
    $saveOrder = $order->saveOrder($_SESSION['reg_number'], $_SESSION['transactionId'], $_SESSION['paystackReference'], 0, 0, 
    $_POST['total']); //save order

    if($saveOrder){
        foreach($_SESSION['cart'] as $key){
            $order->getSlug($key['slug']);
            $order->getQuantity($key['quantity']);
            $order->getAmount($key['amount']);
            $order->saveOrderDetails($_SESSION['transactionId'], $key['slug'], $key['quantity'], $key['amount']);

        }

        $_SESSION['orderAmount'] = $_POST['total'];

        $paystack = new Yabacon\Paystack('sk_test_d91ab575b866910aa0cfcc68910ff4011d044c9f');
        try
        {
          $tranx = $paystack->transaction->initialize([
            'amount'=> $_POST['total'] * 100,       // in kobo
            'email'=> $_SESSION['user_name'],         // unique to customers
            'reference'=> $_SESSION['paystackReference'], // unique to transactions
          ]);
        } catch(\Yabacon\Paystack\Exception\ApiException $e){
            $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
            $all_purpose->redirect("../../checkout");        
        }

        if('success' === $tranx->data->status) {
            $customer_id = $_SESSION['reg_number'];
            $order->updateOrderWithPaystackReference($_SESSION['transactionId'], $tranx->data->reference);
            $order->updateOrderPaymentStatus($customer_id);
            $order->updateOrderWithPaystackReference($_SESSION['transactionId'], $tranx->data->reference);
           
        }

        header('Location: ' . $tranx->data->authorization_url);    
    }else{
        $_SESSION['error'] = "Unable to proceed with the transaction. Please try again";
        $all_purpose->redirect("../../checkout");            
    }
?>