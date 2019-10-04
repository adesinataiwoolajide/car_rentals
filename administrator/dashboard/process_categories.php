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
        if(isset($_POST['add_category'])){
            $eemail = $_SESSION['user_name'];
            $category_name = ucwords($all_purpose->sanitizeInput($_POST['category_name']));
            
            if($categories->checkIfAlreadyAdded($category_name)){
                $_SESSION['error']="Ooopss You Have added $category_name before";
	    		$all_purpose->redirect("categories");
            }else{

                if($categories->createCategory($category_name)){
                    $action ="Added $category_name to the Categories List";
                    $his = $all_purpose->operationHistory($eemail, $action);
                    $_SESSION['success'] = "You Have Added $category_name to the Category List Successfully";
                    $all_purpose->redirect("categories");
                }else{
                    $_SESSION['error']="Network Failure, Please Try Again Later";
                    $all_purpose->redirect("categories");
                }
            }
        }else{
            $_SESSION['error']="Please FIll The Below Form To Add The Category Details";
            $all_purpose->redirect("categories");
        }
    }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
    	$all_purpose->redirect("categories");
    }