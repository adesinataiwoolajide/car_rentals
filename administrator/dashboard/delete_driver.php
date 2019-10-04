<?php
	session_start();
	require("../../Dev/general/all_purpose_class.php");
	include_once("../../connection/connection.php");
    require('../../Dev/Database.php');
    require('../../Dev/autoload.php');
    
    $user = new User();
    $driver = new Driver;
	try{
        $db = Database::getInstance()->getConnection();
        $all_purpose = new all_purpose($db);
        
        if(isset($_GET['staff_number'])){
            $eemail = $_SESSION['user_name'];
        
            $staff_number = $_GET['staff_number'];
            $details = $driver->getSingleStaff($staff_number);
            $staff_number = $details['staff_number'];
            $staff_email = $details['staff_email'];
            if($driver->deleteStaff($staff_number)){
                $action ="Deleted $staff_number Details from the Drivers List";
                $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                $_SESSION['success'] = "You Have Deleted $staff_email Details from the Drivers List Successfully";
                $all_purpose->redirect("drivers");
            }else{
                $_SESSION['error']="Network Failure, Please Try Again Later";
                $all_purpose->redirect("drivers");
            }
            
        }else{
            $_SESSION['error']="Please FIll The Below Form To Delete The Driver's Details";
            $all_purpose->redirect("drivers");
        }


        


       
    }catch(PDOException $e){
        $_SESSION['error']= $e->getMessage();
    	$all_purpose->redirect("drivers");
    }