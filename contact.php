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
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/react.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      nav ul #what{
  background-color: green;
  text-decoration : none;
  border-radius : 30px;
  color:white;

}
.submit-btn{
  background-color: black;
  color: white;
 
}
.btn-wrapper{
  text-align: center;
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
      <li><a href="services.php">services</a></li>
      <li><a href="fecilites.php">Facilites</a></li>
      <li><a href="Rooms.php">Event Booking</a></li>
      <li><a href="contact.php">contact us</a></li>
      <li><a href="developer.php">Developers</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="https://wa.me/8951232985" target="_blank" class="fa-3x fa-brands fa-whatsapp" id="what"></a>
    </ul>
  </nav>

  <div class="contact_us_green">
  <div class="responsive-container-block big-container">
    <div class="responsive-container-block container">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">
        <form class="form-box">
          <div class="container-block form-wrapper">
            <div class="head-text-box">
              <p class="text-blk contactus-head">
                Contact us
              </p>
              <p class="text-blk contactus-subhead">
                <b>If you have any questions about the site or need support , send us your query .</b>
              </p>
            </div>
            <div class="responsive-container-block">
              <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                <p class="text-blk input-title">
                  FIRST NAME :  <input class="input" id="ijowk-6" name="FirstName">
                </p>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  LAST NAME  : <input class="input" id="indfi-4" name="FirstName">
                </p>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  EMAIL      ID   :   <input class="input" id="ipmgh-6" name="FirstName">
                </p>
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  PHONE No : <input class="input" id="imgis-5" name="FirstName">
                </p>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                <p class="text-blk input-title">
                  WHAT DO YOU HAVE IN MIND?
                </p>
                <textarea class="textinput" id="i5vyy-6" placeholder="Please enter query..."></textarea>
              </div>
            </div>
            <div class="btn-wrapper">
              <button class="submit-btn">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div><br/>
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi">
        <div class="container-box">
          <div class="text-content">
            <p class="text-blk contactus-subhead">
              <b>Thank you for sharing your query .we will get back to you within few hours and that's for sure.</b>
            </p>
          </div>
          <div class="workik-contact-bigbox">
            <div class="workik-contact-box">
              <div class="phone text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg">
                <p class="contact-text">
                  +91 7483943607 <br/>+91 6361303271
                </p>
              </div>
              <div class="address text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg">
                <p class="contact-text">
                  mariyammariyakhanum8@gmail.com <br/>mariyamariyamkhanum@gmail.com
                </p>
              </div>
              <div class="mail text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg">
                <p class="contact-text">
                  Kabir Convention Hall <br/>Biccod road <br/>Alur.
                </p>
              </div>
            </div>
            <div class="social-media-links">
              <a href="">
                <img class="social-svg" id="is9ym" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
              </a>
              <a href="">
                <img class="social-svg" id="i706n" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
              </a>
              <a href="">
                <img class="social-svg" id="ib9ve" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
              </a>
              <a href="">
                <img class="social-svg" id="ie9fx" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
    </div>
    
  </div>
  <section id="contactus">
    <div class="social">
    <a class="fa-brands fa-instagram" href="https://instagram.com/kabirconventionhall?igshid=MzRlODBiNWFlZA=="></a>
      <a class="fa-brands fa-facebook" href="https://www.facebook.com/profile.php?id=100093463996577&mibextid=ZbWKwL"></a>
      <a class="fa-solid fa-envelope" ></a>
    </div>
    
  </section>
</body>
</html>