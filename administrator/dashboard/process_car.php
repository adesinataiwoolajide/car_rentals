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
        $dir = "../../assets/cars/";
        
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $file_ext = pathinfo($file_name);
        $ext = $file_ext['extension'];
        $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
        
        if(!(in_array($ext,$extensions))){
            $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
            $all_purpose->redirect('cars');
        }
        if($file_size > 1097152){
            $_SESSION['error'] = 'File size must be not greater than 1 MB';
            $all_purpose->redirect('cars');
        }else{

            if(isset($_POST['add_car'])){
                $eemail = $_SESSION['user_name'];
                $name = $all_purpose->sanitizeInput($_POST['name']);
                $brand_id = $all_purpose->sanitizeInput($_POST['brand_id']);
                $category_id = $all_purpose->sanitizeInput($_POST['category_id']);
                $capacity = $all_purpose->sanitizeInput($_POST['capacity']);
                $facilities = $all_purpose->sanitizeInput($_POST['facilities']);
                $description = $all_purpose->sanitizeInput($_POST['description']);
                $color = $all_purpose->sanitizeInput($_POST['color']);
                $price = $all_purpose->sanitizeInput($_POST['price']);
                $status =1;
                $slug = $car->generateSlug($name);
               
                $move= move_uploaded_file($file_tmp, $dir.$file_name);
                $car_image = $file_name;
                if($car->addCar($slug, $name, $brand_id, $category_id, $capacity, $facilities, $description, $car_image, $status, $color, $price)){
                    $action ="Added $slug To The Car List";
                    $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                    $_SESSION['success'] = "You Have Added $slug To The Car List Successfully";
                    $all_purpose->redirect("cars");
                }else{
                    $_SESSION['error']="Network Failure, Please Try Again Later";
                    $all_purpose->redirect("cars");
                }
                
            }else{
                $_SESSION['error']="Please FIll The Below Form To Add The Car's Details";
                $all_purpose->redirect("cars");
            }


        }


       
    }catch(PDOException $e){
        $_SESSION['error']= $e->getMessage();
    	$all_purpose->redirect("cars");
    }