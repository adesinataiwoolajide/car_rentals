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
        $dir = "../../assets/driver/";
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $file_ext = pathinfo($file_name);
       
        if(isset($_POST['add_driver'])){
            $eemail = $_SESSION['user_name'];
            $staff_name = $all_purpose->sanitizeInput($_POST['staff_name']);
            $staff_email = $all_purpose->sanitizeInput($_POST['staff_email']);
            $phone_number = $all_purpose->sanitizeInput($_POST['phone_number']);
            $staff_number = $_POST['staff_number'];
            if(empty($file_name)){
                $details = $driver->getSingleStaff($staff_number);
                $passport = $details['passport'];
                if($driver->updateStaff($staff_number, $phone_number, $staff_email, $staff_name, $passport)){
                    $action ="Updated $staff_number Details ";
                    $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                    $_SESSION['success'] = "You Have Updates $staff_email Details Successfully";
                    $all_purpose->redirect("drivers");
                }else{
                    $_SESSION['error']="Network Failure, Please Try Again Later";
                    $all_purpose->redirect("edit_driver?staff_number=$staff_number");
                }
                
            }else{
                
                $ext = $file_ext['extension'];
                $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
                
                if(!(in_array($ext,$extensions))){
                    $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
                    $all_purpose->redirect("edit_driver?staff_number=$staff_number");
                }
                if($file_size > 1097152){
                    $_SESSION['error'] = 'File size must be not greater than 1 MB';
                    $all_purpose->redirect("edit_driver?staff_number=$staff_number");
                }else{
                    $move= move_uploaded_file($file_tmp, $dir.$file_name);
                    $passport = $file_name;
                    if($driver->updateStaff($staff_number, $phone_number, $staff_email, $staff_name, $passport)){
                        $action ="Updated $staff_number Details ";
                        $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                        $_SESSION['success'] = "You Have Updates $staff_email Details and Changed The Passport Successfully";
                        $all_purpose->redirect("drivers");
                    }else{
                        $_SESSION['error']="Network Failure, Please Try Again Later";
                        $all_purpose->redirect("edit_driver?staff_number=$staff_number");
                    }
                }
        
            }
        }else{
            $_SESSION['error']="Please FIll The Below Form To Update The Driver's Details";
            $all_purpose->redirect("drivers");
        }


        


       
    }catch(PDOException $e){
        $_SESSION['error']= $e->getMessage();
    	$all_purpose->redirect("drivers");
    }