<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Kabir Convention Hall</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/home.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      nav ul #what{
  background-color: red;
  text-decoration : none;
  border-radius : 30px;
  color:white;

}
    </style>
</head>

<body>
  <nav>
    <div class="logo">
      <img class="bluebirdlogo" src="./image/bluebirdlogo.png" alt="logo">
      <p>Kabir Convention Hall</p>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="fecilites.php">Facilities</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="Rooms.php">Event Booking</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="developer.php">Developers</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="https://wa.me/8951232985" target="_blank" class="fa-3x fa-brands fa-whatsapp" id="what"></a>
    </ul>
  </nav>
  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <img class="carousel-image" src="./image/Mainimg.jpeg"> -->
            <video width="100%" height="860" autoplay>
              <source src="./image/vedio.mp4" type="video/mp4">
            </video>
        </div>
        

        <div class="welcomeline">
          <h1 class="welcometag">&nbsp; About K C H</h1>
        </div>
    </section><br>
    <section id="about">
      <div class="about">
      <p>&nbsp;&nbsp;&nbsp;&nbsp; The Kabir convention hall is suitable for weddings, receptions, birthdays and naming ceremonies, baby showers, social and corporate events seminars, and presentations.<br><br>
   
      <u>Facilities we offer</u>&nbsp;:<br>&nbsp;&nbsp;&nbsp;&nbsp; <ol><li>CCTV</li><li>Hygiene</li><li>Electricity </li><li>Parking</li><li>Fire safety</li><li>Security</li></ol><br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we are a bunch of fun-loving energetic and passionate people working towards the common goal of proving exceptional services From inspirational ideas to stunning productions, Strong themes, and creative programs we do everything to create memorable  experiences and branching opportunities that exceed customer expectations.<br><br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Kabir convention hall is located on Biccod Road, Alur. and it's just 1.5km away from the KSRTC  bus stand.</p>
      </div>
    </section>
    <section id="contactus">
    <div class="social">
    <a class="fa-brands fa-instagram" href="https://instagram.com/kabirconventionhall?igshid=MzRlODBiNWFlZA=="></a>
      <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100093463996577&mibextid=ZbWKwL"></a>
      <a class="fa-solid fa-envelope" ></a>
    </div>
   
  </section>
    </body>