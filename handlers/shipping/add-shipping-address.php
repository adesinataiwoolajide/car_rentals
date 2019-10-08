<?php
session_start();
require_once '../../connection/connection.php';
require_once '../../Dev/registration/customer_registration.php';
require_once '../../Dev/general/all_purpose_class.php';
$all_purpose = new all_purpose($db);
$register = new newCustomerRegistration($db);
$return = $_SERVER['HTTP_REFERER'];
try{
	if(isset($_POST['add-address'])){

		$customer_id = $_SESSION['reg_number'];
		$phone =  $all_purpose->sanitizeInput($_POST['phone']);
		$address =  $all_purpose->sanitizeInput($_POST['address']);
		$landmark =  $all_purpose->sanitizeInput($_POST['landmark']);
		$state =  $all_purpose->sanitizeInput($_POST['state']);
		$city = $state;
	
		if(!empty($register->saveTheShippingAddress($customer_id, $phone, $address, $landmark, $state, $city))){
			$_SESSION['success'] = "Shipping Address Saved";
			$all_purpose->redirect("../../shipping-address");
		}else{
			$_SESSION['success'] = "Shipping Address Saved";
			$all_purpose->redirect("../../shipping-address");
		}
	
		
	}else{
		$_SESSION['error'] = "Please Fill Your Shipping Address Below";
		$all_purpose->redirect($return);
	}
} catch (PDOException $e) {
	$_SESSION['error'] = $e->getMessage();
	$all_purpose->redirect($return);
}
?>
