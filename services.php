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
.imag img{
    width: 49%;
    height: 500px;

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
      <li><a href="fecilites.php">Facilites</a></li>
      <li><a href="services.php">services</a></li>
      <li><a href="contact.php">contact us</a></li>
      <li><a href="Rooms.php">Event Booking</a></li>
      <li><a href="developer.php">Developers</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="https://wa.me/8951232985" target="_blank" class="fa-3x fa-brands fa-whatsapp" id="what"></a>
    </ul>
  </nav>
    <section id="">
      <div><br><br><br>   <h1 class="fac"> <b>Services</b> </h1><br>
      <h1 class="fac"><u>Photography</u></h1>
</div>
    <div class="fee">
    <img src="./image/pic.jpg"alt="1">
    <h1><b>Contact number</b> - 6789456790</h1><br>

</div>

    <br>
    <h1 class="fac"><u>Videography</u></h1>
    </div>
    <div class="fee">

    <video width="90%" height="600" autoplay>
    <source src="./image/ved.mp4" type="video/mp4">
    </video>
    
  <h1><b>Contact number</b> - 9353478902</h1><br>
</div><br>
    <br>
    <h1 class
    ="fac"><u>Bridal Makeup</u></h1>
    </div>
    <div class="fee">
    <img src="./image/bmakeup.jpg" alt="1">
    <h1><b>Contact number</b> - 9241488215</h1><br>
</div><br>
    <br>
    <h1 class="fac"><u>Decoration</u></h1>
   <br>
   <div class="fee">
    <img src="./image/od2.jpg" alt="1">
    <h1><b>Outdoor theme</b>......Rs.40,000</h1><br>
</div><br>
<div class="fee">
    <img src="./image/hal2.png" alt="1">
    <h1><b>Haldi themes</b>.....Rs.30,000</h1><br>
</div><br>
<div class="fee">
    <img src="./image/nature1.jpeg" alt="1">
    <h1><b>Nature theme</b>.....Rs.50,000</h1><br>
</div><br>
<div class="fee">
    <img src="./image/cloud.jpg" alt="1">
    <h1><b>Cloud theme</b>......Rs.26,000</h1><br>
</div><br>
<div class="fee">
    <img src="./image/dream.jpg" alt="1">
    <h1><b>Dream theme</b>......Rs.45,000</h1><br>
</div><br>
<div class="fee">
    <img src="./image/love.jpg" alt="1">
    <h1><b>Love theme</b>.......Rs.30,000</h1><br>

    <h1 class="fac"><u>Other Decoration</u>.........Starts from Rs.20,000</h1><br> 
    <div class="imag">
    <img src="./image/decor1.jpg" alt="1">
    <img src="./image/decor2.jpg" alt="2">
    <img src="./image/decor3.jpg" alt="3">
    </div>
    <br>
    <div class="imag">
    <img src="./image/decor5.jpg" alt="1">
    <img src="./image/decor6.jpg" alt="2">
    <img src="./image/decor4.jpg" alt="3">
    <img src="./image/decor11.jpg" alt="4">
  
    </div>
    <br><br><br><br>
</div><br>
</section><br>
    
<section id="contactus">
    <div class="social">
    <a class="fa-brands fa-instagram" href="https://instagram.com/kabirconventionhall?igshid=MzRlODBiNWFlZA=="></a>
      <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100093463996577&mibextid=ZbWKwL"></a>
      <a class="fa-solid fa-envelope" ></a>
    </div>
   </section>

  </div>
    </body>