<?php
	session_start();
	require("../../Dev/general/all_purpose_class.php");
	include_once("../../connection/connection.php");
    require('../../Dev/Database.php');
    require('../../Dev/autoload.php');
    
    $car = new Car();
    
	try{
        $db = Database::getInstance()->getConnection();
        $all_purpose = new all_purpose($db);
        
        if(isset($_GET['slug'])){
            $eemail = $_SESSION['user_name'];
            
            $slug = $_GET['slug'];
            
            if($car->deleteCar($slug)){
                $action ="Deleted $slug From The Car List";
                $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                $_SESSION['success'] = "You Have Deleted $slug From The Car List Successfully";
                $all_purpose->redirect("cars");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("cars");
            }
            
        }else{
            $_SESSION['error']="Please Click on the Trash Icon To Delete The Car's Details";
            $all_purpose->redirect("cars");
        }

    }catch(PDOException $e){
        $_SESSION['error']= $e->getMessage();
    	$all_purpose->redirect("cars");
    }