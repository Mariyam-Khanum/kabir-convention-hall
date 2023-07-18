<?php    
		include 'config.php';

            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO room(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);
                    

                    
                        if ($result) {
							
                          
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                                
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
	<script src="script.js"></script>
	<style>
		/* reset */

		* {
			border: 0;
			box-sizing: content-box;
			color: inherit;
			font-family: inherit;
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			line-height: inherit;
			list-style: none;
			margin: 0;
			padding: 0;
			text-decoration: none;
			vertical-align: top;
		}

		/* content editable */

		*[contenteditable] {
			border-radius: 0.25em;
			min-width: 1em;
			outline: 0;
		}

		*[contenteditable] {
			cursor: pointer;
		}

		*[contenteditable]:hover,
		*[contenteditable]:focus,
		td:hover *[contenteditable],
		td:focus *[contenteditable],
		img.hover {
			background: #DEF;
			box-shadow: 0 0 1em 0.5em #DEF;
		}

		span[contenteditable] {
			display: inline-block;
		}

		/* heading */

		h1 {
			font: bold 100% sans-serif;
			letter-spacing: 0.5em;
			text-align: center;
			text-transform: uppercase;
		}

		/* table */

		table {
			font-size: 75%;
			table-layout: fixed;
			width: 100%;
		}

		table {
			border-collapse: separate;
			border-spacing: 2px;
		}

		th,
		td {
			border-width: 1px;
			padding: 0.5em;
			position: relative;
			text-align: center;
			align-items:center;
			font size:19px;
		}

		th,
		td {
			border-radius: 0.25em;
			border-style: solid;
		}

		th {
			background: #EEE;
			border-color: #BBB;
		}

		td {
			border-color: #DDD;
		}

		/* page */

		html {
			font: 16px/1 'Open Sans', sans-serif;
			overflow: auto;
			padding: 0.5in;
		}

		html {
			background: #999;
			cursor: default;
		}

		body {
			box-sizing: border-box;
			height: 15in;
			margin: 0 auto;
			overflow: hidden;
			padding: 0.5in;
			width: 8.5in;
		}

		body {
			background: #FFF;
			border-radius: 1px;
			box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
		}

		/* header */

		header {
			margin: 0 0 3em;
		}

		header:after {
			clear: both;
			content: "";
			display: table;
		}

		header h1 {
			background: #000;
			border-radius: 0.25em;
			color: #FFF;
			margin: 0 0 1em;
			padding: 0.5em 0;
		}

		header address {
			float: left;
			font-size: 75%;
			font-style: normal;
			line-height: 1.25;
			margin: 0 1em 1em 0;
		}

		header address p {
			margin: 0 0 0.25em;
		}

		header span,
		header img {
			display: block;
			float: right;
		}

		header span {
			margin: 0 0 1em 1em;
			max-height: 25%;
			max-width: 60%;
			position: relative;
		}

		header img {
			max-height: 350px;
			max-width: 40%;
		}

		header input {
			cursor: pointer;
			/* -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; */
			height: 100%;
			left: 0;
			opacity: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}

		/* article */

		article,
		article address,
		table.meta,
		table.inventory {
			margin: 0 0 3em;
		}

		article:after {
			clear: both;
			content: "";
			display: table;
		}

		article h1 {
			clip: rect(0 0 0 0);
			position: absolute;
		}

		article address {
			float: left;
			font-size: 125%;
			font-weight: bold;
		}

		/* table meta & balance */

		table.meta,
		table.balance {
			float: right;
			width: 40%%;
			height:60px;
			align:center;
		}

		table.meta:after,
		table.balance:after {
			clear: both;
			content: "";
			display: table;
		}

		/* table meta */

		table.meta th {
			width: 60%;
		}

		table.meta td {
			width: 80%;
			font-size:large;
		}

		/* table items */

		table.inventory {
			clear: both;
			width: 100%;
		}

		table.inventory th {
			font-weight: bold;
			text-align: center;
		}

		table.inventory td:nth-child(1) {
			width: 26%;
		}

		table.inventory td:nth-child(2) {
			width: 38%;
		}

		table.inventory td:nth-child(3) {
			text-align: right;
			width: 12%;
		}

		table.inventory td:nth-child(4) {
			text-align: right;
			width: 12%;
		}

		table.inventory td:nth-child(5) {
			text-align: right;
			width: 12%;
		}

		/* table balance */

		table.balance th,
		table.balance td {
			width: 50%;
		}

		table.balance td {
			text-align: right;
		}

		/* aside */

		aside h1 {
			border: none;
			border-width: 0 0 1px;
			margin: 0 0 1em;
		}

		aside h1 {
			border-color: #999;
			border-bottom-style: solid;
		}

		/* javascript */

		.add,
		.cut {
			border-width: 1px;
			display: block;
			font-size: .8rem;
			padding: 0.25em 0.5em;
			float: left;
			text-align: center;
			width: 0.6em;
		}

		.add,
		.cut {
			background: #9AF;
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
			background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
			background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
			border-radius: 0.5em;
			border-color: #0076A3;
			color: #FFF;
			cursor: pointer;
			font-weight: bold;
			text-shadow: 0 -1px 2px rgba(0, 0, 0, 0.333);
		}

		.add {
			margin: -2.5em 0 0;
		}

		.add:hover {
			background: #00ADEE;
		}

		.cut {
			opacity: 0;
			position: absolute;
			top: 0;
			left: -1.5em;
		}

		.cut {
			-webkit-transition: opacity 100ms ease-in;
		}

		tr:hover .cut {
			opacity: 1;
		}

		@media print {
			* {
				-webkit-print-color-adjust: exact;
			}

			html {
				background: none;
				padding: 0;
			}

			body {
				box-shadow: none;
				margin: 0;
			}

			span:empty {
				display: none;
			}

			.add,
			.cut {
				display: none;
			}
		}

		@page {
			margin: 0;
		}
		.btn{
			background-color:Blue;
			color:white;
			width:20%;
			height:60px;
			border-radius:10px;
			cursor:grab;
		}
	</style>

</head>

<body>

    <header>
		<h1>Invoice</h1>
		<address>
			<p>Kabir Convention Hall,</p>
			<p>(+91) 7483943607</p>
		</address>
		<span><img alt="" src="./image/bluebirdlogo.png" class="logo"></span>
		<span><img alt="" src="./image/upi.jpg" class="scan"></span>
	</header>
	<article>
		<h1>Recipient</h1>
		
		
		<table class="meta">
			<tr>
				<th><span>Pay Bill using this scanner</span></th>
				
   
		</table>
		<table class="inventory">
				<?php $query ="select * from userpay";
				$result=mysqli_query($conn,$query);
				while($array=mysqli_fetch_row($result))
				{
					echo"<br/>";
					echo"id"; echo" ";echo"="; echo" ";echo $array[0];   echo" ";  echo"<br/>";echo"<br/>";
					echo"Name"; echo" ";echo"="; echo" ";echo $array[1];  echo"<br/>";echo"<br/>";
					echo"Email"; echo" ";echo"="; echo" ";echo $array[2];  echo"<br/>";echo"<br/>";
					echo"Country"; echo" ";echo"="; echo" ";echo $array[3];  echo"<br/>";echo"<br/>";
					echo"Ph.no"; echo" ";echo"="; echo" ";echo $array[4];  echo"<br/>";echo"<br/>";
					echo"Event"; echo" ";echo"="; echo" ";echo $array[5];  echo"<br/>";echo"<br/>";
					echo"Bed"; echo" ";echo"="; echo" ";echo $array[6];  echo"<br/>";echo"<br/>";
					echo"Food"; echo" ";echo"="; echo" ";echo $array[7];  echo"<br/>";echo"<br/>";
					echo"Rooms"; echo" ";echo"="; echo" ";echo $array[8];  echo"<br/>";echo"<br/>";
					echo"Date From"; echo" ";echo"="; echo" ";echo $array[9];  echo"<br/>";echo"<br/>";
					echo"Date To"; echo" ";echo"="; echo" ";echo $array[10];  echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";echo"<br/>";
					echo"PAY CATERING AND DECORATION AND FOOD AMOUNT AFTER EVENT COMPLETE";echo"<br/>";echo"<br/>";
				
					echo"More information about this pleace Contact with us";
					
				}

				?>
				<?php

ob_end_flush();

?>
		</table>

		<table class="balance">
		 
				
			<tr>
				<th><span>Pay in advance</span></th>
				<td><span data-prefix></span><span><?php $query ="select * from userpay";
				$result=mysqli_query($conn,$query);
				while($array=mysqli_fetch_row($result)) {echo $array[5]; }?></span></td>
			</tr>
			<tr>
				<th><span>Amount Paid</span></th>
				<td><span data-prefix>Rs&nbsp;</span><span>0.00</span></td>
			</tr>
				
		</table>
	</article>
	<aside>
		<h1><span> More informstion<br><br>Contact us</span></h1>
		<div>
			<p align="center">Email :- Kabirconventionhall@gmail.com || Web :- www.Kabir Convention Hall.com<br><br> Phone :- +91 9313346569 </p><br><br>
			<h5><a href="Rooms.php"> <button type="button" class="btn" >Exit</button></a> </h5><br><br><br><br><br><br><br>
			</div><br><br><br></div><br><br><br></div><br><br><br></div><br><br><br></div><br><br><br></div><br><br><br>
	</aside>
	
</body>
</html>