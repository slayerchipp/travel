<?php 
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($conn);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/booking.css'>
    <script src='main.js'></script>
    <style>
        body{
            background-image: url("./img/back1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0%;
            background-attachment: fixed; 
           }
    </style>
</head>
<body>
     <!--nav bar-->
     <?php include("nav.php"); ?>

     <!--profile detals-->
     <h3 class="profile-title">My Profile</h3>
     <div class="profile-container">
        <div class="box-1-dp">
            <img src="./img/profile.png" class="my-profile-png"/>
        </div>
        <div class="box-1">
           <h4 class="attribute-of-profile">Username</h4>
           <?php echo $user_data['username'];?>
        </div>
        <div class="box-1">
           <h4 class="attribute-of-profile">Email</h4>
           <?php echo $user_data['email'];?>
        </div>
        <div class="box-1">
          <input type="submit" class="update-profile-button" value="update">
        </div>
        <div class="box-1">
          <input type="submit" class="profile-button-delete" value="delete">
        </div>

     </div>
     <!--booking section-->
     <h3 class="profile-title">Hotel Booking</h3>
     <div class="booking-container">
        <div class="booking-box">
            <input type="text" class="search-area" placeholder="Enter City Of Hotel Name">
        </div>
        <div class="booking-box">
            <input type="text" class="search-area" placeholder="Cheking in">
        </div>
        <div class="booking-box">
            <input type="text" class="search-area" placeholder="Checking out">
        </div>
        <div class="booking-box">
            <input type="number" class="search-area" placeholder="Adult number">
        </div>
        <div class="booking-box">
            <input type="number" class="search-area" placeholder="Children number">
        </div>
        <div class="booking-box">
            <input type="submit" class="submit-search-box" value="Search Now">
        </div>
     </div>
<p class="para-box-booking">
We provide Hotel booking engine solution which suits your business Need. With Our User friendly Hotel booking Websites development. Create your own hotel website and booking system to attract huge bookings online. We provide customized Hotel Booking Solution for Ethiopia Hotels and Travel Agencies, which can best suits their business need.
<br><br>
Our Bespoke Booking Engine Development for
</p>

<div class="collection-of-booking-container">
    <div class="box-container-collection">
        <img src="./img/booking/hotel2.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">hotel booking</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/guest.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Guest House Booking</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/vila.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Villa Rental</h3>
    </div>
   
    <div class="box-container-collection">
        <img src="./img/booking/resorts.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Resorts Booking</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/tour1.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Travel Portal Development</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/car1.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Car Rental Solution</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/safari1.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">Safari Booking</h3>
    </div>
    <div class="box-container-collection">
        <img src="./img/booking/xml1.png" width="150px" class="img-collection-png"/>
        <h3 class="img-collection-tittle">XML API Integration</h3>
    </div>
</div>
    
</body>
</html>