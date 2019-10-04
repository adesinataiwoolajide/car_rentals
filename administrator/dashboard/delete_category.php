<?php
	session_start();
	require("../../Dev/general/all_purpose_class.php");
    include_once("../../connection/connection.php");
    require('../../Dev/autoload.php');
    require('../../Dev/Database.php');
    
    $categories = new Categories();
	try{
        $db = Database::getInstance()->getConnection();
        $all_purpose = new all_purpose($db);
        if(isset($_GET['category_id'])){
            $eemail = $_SESSION['user_name'];
            $category_id = $_GET['category_id'];
            $details = $categories->getSingleCategoryList($category_id);
            $category_name = $details['category_name'];
            
            
            if($categories->deleteCategory($category_id)){
                $action ="Deleted $category_name from the Categories List";
                $his = $all_purpose->operationHistory($eemail, $action);
                $_SESSION['success'] = "You Have Deleted $category_name from the Category List Successfully";
                $all_purpose->redirect("categories");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("categories");
            }
        
        }else{
            $_SESSION['error']="Please Click on the Trash Icon To Delete The Category Details";
            $all_purpose->redirect("categories");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("categories");
    }