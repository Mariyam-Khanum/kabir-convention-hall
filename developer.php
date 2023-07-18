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
    <link rel="stylesheet" href="./css/style.css">
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
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/whasapp.css">

    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      .image{
    display: flex;
    justify-content: space-between;
}
.image img{
    width: 32%;
    height: 300px;

}
.whatsapp {
    position: fixed;
    right: 0px;
    top: 52%;
    }
    .whatsapp h5 {
    color: white;
    background: #20b20f;
    padding: 12px;
    border-radius: 10px;
    }    
    nav ul #what{
  background-color: green;
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
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="Rooms.php">Event Booking</a></li>
      <li><a href="developer.php">Developers</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="https://wa.me/8951232985" target="_blank" class="fa-3x fa-brands fa-whatsapp" id="what"></a>
    </ul>
  </nav>
  <section id="">
    <br><br><br><br>
  <h1><u>Developers</u></h2><br><br>
  <div>
  <img class="carousel-image" src="./image/res.jpg"><br><br><br>
</div>
<div class=”whatsapp”>

<a href=”https://api.whatsapp.com/send?phone=917676093294″  alt="whatsapp" target=”_blank”>

<h5><i class=”fab fa-whatsapp fa-3x fa-spin” area-hidden=”true”></i></h5></a>

</div>
</section>
    
    
<section id="contactus">
    <div class="social">
    <a class="fa-brands fa-instagram" href="https://instagram.com/kabirconventionhall?igshid=MzRlODBiNWFlZA=="></a>
      <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100093463996577&mibextid=ZbWKwL"></a>
      <a class="fa-solid fa-envelope" ></a>
    </div>
  
    
  </section>

  </div>
    </body>