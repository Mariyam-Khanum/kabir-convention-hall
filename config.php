<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "Kabir_convention_hall";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfull.')</script>";
// }
?>