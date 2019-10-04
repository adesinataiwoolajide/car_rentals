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
        if(isset($_POST['update_category'])){
            $eemail = $_SESSION['user_name'];
            $category_name = ucwords($all_purpose->sanitizeInput($_POST['category_name']));
            $category_id = $_POST['category_id'];
 
            if($categories->updateCategory($category_name, $category_id)){
                $action ="Updated $category_name to the Categories List";
                $his = $all_purpose->operationHistory($eemail, $action);
                $_SESSION['success'] = "You Have Updated $category_name Details Successfully";
                $all_purpose->redirect("categories");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("edit_category?category-id=$category_id");
            }
            
        }else{
            $_SESSION['error']="Please FIll The Below Form To Update The Category Details";
            $all_purpose->redirect("edit_category?category-id=$category_id");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("edit_category?category-id=$category_id");
    }