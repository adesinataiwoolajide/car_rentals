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
        

        if(isset($_POST['update_car'])){
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
            $slug = $_POST{'slug'};

            if(empty($file_name)){
                $details = $car->getSingleCar($slug);
                $car_image = $details['car_image'];
        
                if($car->updateCar($name, $brand_id, $category_id, $capacity, $facilities, $description, $car_image, $status, $color, $price, $slug)){
                    $action ="Updated $slug Details";
                    $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                    $_SESSION['success'] = "You Have Updated $slug Details Successfully";
                    $all_purpose->redirect("cars");
                }else{
                    $_SESSION['error']="Network Failure, Please Try Again Later";
                    $all_purpose->redirect("edit_car?slug=$slug");
                }
            }else{
                $ext = $file_ext['extension'];
                $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
                
                if(!(in_array($ext,$extensions))){
                    $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
                    $all_purpose->redirect("edit_car?slug=$slug");
                }
                if($file_size > 1097152){
                    $_SESSION['error'] = 'File size must be not greater than 1 MB';
                    $all_purpose->redirect("edit_car?slug=$slug");
                }else{
                    $move= move_uploaded_file($file_tmp, $dir.$file_name);
                    $car_image = $file_name;
                    if($car->updateCar($name, $brand_id, $category_id, $capacity, $facilities, $description, $car_image, $status, $color, $price, $slug)){
                        $action ="Updated $slug Details";
                        $his = $all_purpose->getUserDetailsandAddActivity($eemail, $action);
                        $_SESSION['success'] = "You Have Updated $slug Detailsnand changed the car image Successfully";
                        $all_purpose->redirect("cars");
                    }else{
                        $_SESSION['error']="Network Failure, Please Try Again Later";
                        $all_purpose->redirect("edit_car?slug=$slug");
                    }
                }
            }   
                
        }else{
            $_SESSION['error']="Please FIll The Below Form To Update The Car's Details";
            $all_purpose->redirect("edit_car?slug=$slug");
        }

    }catch(PDOException $e){
        echo  $e->getMessage();
    	//$all_purpose->redirect("edit_car?slug=$slug");
    }