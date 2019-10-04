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
        if(isset($_POST['update_brand'])){
            $eemail = $_SESSION['user_name'];
            $brand_name = ucwords($all_purpose->sanitizeInput($_POST['brand_name']));
            $brand_id = $_POST['brand_id'];
 
            if($brands->updateBrand($brand_name, $brand_id)){
                $action ="Updated $brand_name Details";
                $his = $all_purpose->operationHistory($eemail, $action);
                $_SESSION['success'] = "You Have Updated $brand_name Details Successfully";
                $all_purpose->redirect("brands");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("edit_brand?brand-id=$brand_id");
            }
            
        }else{
            $_SESSION['error']="Please FIll The Below Form To Update The brand Details";
            $all_purpose->redirect("edit_brand?brand-id=$brand_id");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("edit_brand?brand_id=$brand_id");
    }