<?php
    session_start();
    require_once("../../Dev/autoload.php");
    if(!isset($_SESSION['id'])){
        $_SESSION['error'] = "Please Login with Your Details to acces the system";
        header('Location: .././');
    }
	require("../../Dev/general/all_purpose_class.php");
		
	require('../../Dev/Database.php');
	
	$categories = new Categories();
    $user = new User();
    $driver = new Driver();
    $brand = new Brand();
    $car = new Car();
	$role = $_SESSION['role'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Title -->
    <title>CAR RENTALS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="Toast/css/Toast.min.css">

</head>

<body>
    