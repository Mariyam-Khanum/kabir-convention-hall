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
    <title>Convention Hall</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <link rel="stylesheet" href=".css/services.css">
    <link rel="stylesheet" href=".css/whasapp.css">
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
nav ul #what{
  background-color: green;
  text-decoration : none;
  border-radius : 30px;
  color:white;

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
      <li><a href="Fecilites.php">Facilities</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="Rooms.php">Event Booking</a></li>
      <li><a href="developer.php">Developers</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="https://wa.me/8951232985" target="_blank" class="fa-3x fa-brands fa-whatsapp" id="what"></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/Mainimg.jpeg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/home5.jpeg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/home3.jpeg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/home8.jpeg">
        </div>

        <div class="welcomeline">
             <h1 class="welcometag">Welcome to Kabir Convention Hall</h1>
        </div>
    </section>
    <br>
    <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/home2.jpeg">
        </div>
        <!-- <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel2.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel3.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel4.jpg">
        </div> -->

        <div class="welcomeline">
          <h1 class="welcometag">"Giving your event a new wing"</h1>
        </div>
    </section><br>
    <div class="image">
    <img src="./image/home1.jpeg" alt="1">
  <img src="./image/home7.jpeg" alt="2">
  <img src="./image/home3.jpeg" alt="3">
    </div><br>
    <div class="image">
    <img src="./image/home4.jpeg" alt="1">
  <img src="./image/home5.jpeg" alt="2">
  <img src="./image/home6.jpeg" alt="3">
    </div><br>

      <!-- bookbox -->
      
    
  

  <!-- <section id="thirdsection">
  <div class="welcomeline">
          <h1 class="welcometag">Welcome to Kabir Convention Hall</h1>
        </div>
  </section> -->
  <section id="what">
  <div class=”whatsapp”>

<a href=”https://api.whatsapp.com/send?phone=7676093294″  alt="whatsapp" target=”_blank”>

<h5><i class=”fab fa-whatsapp fa-3x fa-spin” area-hidden=”true”></i></h5></a>

</div></section>

  <section id="contactus">
    <div class="social">
      <a class="fa-brands fa-instagram" href="https://instagram.com/kabirconventionhall?igshid=MzRlODBiNWFlZA=="></a>
      <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100093463996577&mibextid=ZbWKwL"></a>
      <a class="fa-solid fa-envelope" ></a>
    </div>
    
  </section>
  
</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>