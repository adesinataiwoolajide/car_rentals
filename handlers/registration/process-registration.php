<?php
	session_start();
	require_once '../../connection/connection.php';
	require_once '../../Dev/registration/customer_registration.php';
	require_once '../../Dev/general/all_purpose_class.php';
	require_once '../../Dev/autoload.php';
	$all_purpose = new all_purpose($db);
	$register = new newCustomerRegistration($db);

	try {
		
		if(isset($_POST['register'])){
			$full_name = $all_purpose->sanitizeInput($_POST['full_name']);
			$user_name = $all_purpose->sanitizeInput($_POST['user_name']);
			$password = $all_purpose->sanitizeInput(sha1($_POST['password']));
			$repeat = $all_purpose->sanitizeInput(sha1($_POST['repeat']));
			function generateRandomHash($length)
			{
				return strtoupper(substr(md5(uniqid(rand())), 0, (-32 + $length)));
			}	
			$reg_number = strtoupper(generateRandomHash(10));
			
			if($password != $repeat){
				$_SESSION['error'] = "Ooops! Password Does Not Match";
				$all_purpose->redirect("../../register");
			}elseif($register->checkingNewUserExistence($user_name)){
				$_SESSION['error'] = "Ooops! $user_name is Already in use by another Customer";
				$all_purpose->redirect("../../register");
			}else{
				$email = $user_name;
				if(!empty($register->newUserRegistration($full_name, $user_name, $password, $reg_number))){
					$action= "$user_name Successfully Registered Account on the website";
					$his= $all_purpose->operationHistory($action, $email);
					$_SESSION['success'] = "$email You Have Registered Your Account Successfully";
					$all_purpose->redirect("../../login");
					
				}else{
					$_SESSION['error'] = "Unable to Complete Your Registration at the moment, Please Try Again Later";
					$all_purpose->redirect("../../register");
				}
			}

		}else{
			$_SESSION['error'] = "Please Fill The Below Form To Register Your Account";
			$all_purpose->redirect("../../register");
		}
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
		$all_purpose->redirect("../../register");
	}

?>