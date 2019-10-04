<?php
	session_start();
	require("../../Dev/general/all_purpose_class.php");
    include_once("../../connection/connection.php");
    require('../../Dev/autoload.php');
    require('../../Dev/Database.php');
    
    $brand = new Brand();
	try{
        $db = Database::getInstance()->getConnection();
        $all_purpose = new all_purpose($db);
        if(isset($_POST['add_brand'])){
            $eemail = $_SESSION['user_name'];
            $brand_name = ucwords($all_purpose->sanitizeInput($_POST['brand_name']));
            
            if($brand->checkIfAlreadyAdded($brand_name)){
                $_SESSION['error']="Ooopss You Have added $brand_name before";
	    		$all_purpose->redirect("brands");
            }else{

                if($brand->createBrand($brand_name)){
                    $action ="Added $brand_name to the Brands List";
                    $his = $all_purpose->operationHistory($eemail, $action);
                    $_SESSION['success'] = "You Have Added $brand_name to the Brand List Successfully";
                    $all_purpose->redirect("brands");
                }else{
                    $_SESSION['error']="Network Failure, Please Try Again Later";
                    $all_purpose->redirect("brands");
                }
            }
        }else{
            $_SESSION['error']="Please FIll The Below Form To Add The Brand Details";
            $all_purpose->redirect("brands");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("brands");
    }