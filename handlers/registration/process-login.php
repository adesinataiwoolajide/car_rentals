<?php
	session_start();
	require_once '../../connection/connection.php';
	require_once '../../Dev/registration/customer_registration.php';
	require_once '../../Dev/general/all_purpose_class.php';
	require_once '../../Dev/autoload.php';
	$all_purpose = new all_purpose($db);
	$register = new newCustomerRegistration($db);
	try {
		
		if(isset($_POST['login'])){
			$user_name = $all_purpose->sanitizeInput($_POST['user_name']);
			$password = $all_purpose->sanitizeInput(sha1($_POST['password']));
			
			if($register->checkCustomerLogin($user_name, $password)){
				$_SESSION['error'] = "Ooops! Invalid User Name or Password";
				$all_purpose->redirect("../../login");
			}else{
				$returnUrl = $_SERVER['HTTP_REFERER'];
				$myDetails = $register->CustomerLogin($user_name, $password);
				
				$_SESSION['id'] = $myDetails['registration_id'];
				$_SESSION['name'] = $myDetails['full_name'];
				$_SESSION['user_name'] = $myDetails['user_name'];
				$_SESSION['reg_number'] = $myDetails['reg_number'];
				$reg_number = $_SESSION['reg_number'];
				$_SESSION['success'] = $_SESSION['name']. " Welcome To Your Dashboard";
				if(isset($_SESSION['cart'])){
					$_SESSION['success'] = "You Have Login Successfully, Please Kindly continue your shopping";
					$all_purpose->redirect("../../shopping-cart");
				}elseif($register->checkShippingAddress($reg_number)){
					$_SESSION['success'] = "Please Kindly Fill Your Shipping/Delivery Address";
					$all_purpose->redirect("../../shipping-address");
				}else{
					$_SESSION['success'] = "Login successfull";
					$all_purpose->redirect("../.././dashboard");
				}
				
			}
		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Login Your Account";
			$all_purpose->redirect("../../login");
		}
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
		$all_purpose->redirect("../../login");
	}

?>