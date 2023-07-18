<?php

include '../config.php';

$id = $_GET['id'];

$sql ="Select * from roombook where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $RoomType = $row['RoomType'];
    $Bed = $row['Bed'];
    $NoofRoom = $row['NoofRoom'];
    $Meal = $row['Meal'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
}


if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE roombook SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){

        $type_of_room = 0;      
        if($RoomType=="Reception")
        {
            $type_of_room = 3000;
        }
        else if($RoomType=="Birthday")
        {
            $type_of_room = 2000;
        }
        else if($RoomType=="Wedding")
        {
            $type_of_room = 1500;
        }
        else if($RoomType=="Engagement")
        {
            $type_of_room = 3000;
        }
        else if($RoomType=="Naming ceremony")
        {
            $type_of_room = 4000;
        }
        else if($RoomType=="Baby Shower")
        {
            $type_of_room = 5000;
        }
        else if($RoomType=="other")
        {
            $type_of_room = 6000;
        }
    
        
        
        if($Bed=="Single")
        {
            $type_of_bed = $type_of_room * 1/100;
        }
        else if($Bed=="Double")
        {
            $type_of_bed = $type_of_room * 2/100;
        }
        else if($Bed=="Triple")
        {
            $type_of_bed = $type_of_room * 3/100;
        }
        else if($Bed=="Quad")
        {
            $type_of_bed = $type_of_room * 4/100;
        }
            else if($Bed=="None")
        {
            $type_of_bed = $type_of_room * 0/100;
        }

        if($Meal=="Veg")
        {
            $type_of_meal=$type_of_bed * 2;
        }
        else if($Meal=="Non-veg")
        {
            $type_of_meal=$type_of_bed * 2;
        }
        else if($Meal=="South indian")
        {
            $type_of_meal=$type_of_bed * 2;
        }
        else if($Meal=="North indian")
        {
            $type_of_meal=$type_of_bed * 2;
        }else if($Meal=="chiese")
        {
            $type_of_meal=$type_of_bed * 2;
        }else if($Meal=="Traditional")
        {
            $type_of_meal=$type_of_bed * 2;
        }
        else if($Meal=="None")
        {
            $type_of_meal=$type_of_bed * 2;
        }
                                                            
        $ttot = $type_of_room *  $noofday * $NoofRoom;
        $mepr = $type_of_meal *  $noofday;
        $btot = $type_of_bed * $noofday;

        $fintot = $ttot + $mepr + $btot;

        $psql = "INSERT INTO payment(id,Name,Email,RoomType,Bed,NoofRoom,cin,cout,noofdays,roomtotal,bedtotal,meal,mealtotal,finaltotal) VALUES ('$id', '$Name', '$Email', '$RoomType', '$Bed', '$NoofRoom', '$cin', '$cout', '$noofday', '$ttot', '$btot', '$Meal', '$mepr', '$fintot')";

        mysqli_query($conn,$psql);

        header("Location:roombook.php");
    }
}
else
{
    echo "<script>alert('Guest Already Confirmed')</script>";
    header("Location:roombook.php");
}


?>