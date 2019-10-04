<?php
	session_start();
	require("../../Dev/general/all_purpose_class.php");
    include_once("../../connection/connection.php");
    require('../../Dev/autoload.php');
    require('../../Dev/Database.php');
    
    $brands = new Brand();
	try{
        $db = Database::getInstance()->getConnection();
        $all_purpose = new all_purpose($db);
        if(isset($_GET['brand_id'])){
            $eemail = $_SESSION['user_name'];
            $brand_id = $_GET['brand_id'];
            $details = $brands->getSingleBrandList($brand_id);
            $brand_name = $details['brand_name'];
            
            if($brands->deleteBrand($brand_id)){
                $action ="Deleted $brand_name from the Brands List";
                $his = $all_purpose->operationHistory($eemail, $action);
                $_SESSION['success'] = "You Have Deleted $brand_name from the Brand List Successfully";
                $all_purpose->redirect("brands");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("brands");
            }
        
        }else{
            $_SESSION['error']="Please Click on the Trash Icon To Delete The Brand Details";
            $all_purpose->redirect("brands");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("brands");
    }