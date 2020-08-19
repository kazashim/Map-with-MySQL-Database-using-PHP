<?php
/*
|Author: Kazashim Kuzasuwat
|Email: Kazashim@cynojine.com
|Website: https://cynojine.com
*/

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'location_db';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

 $coordinates = array();
 $latitudes = array();
 $longitudes = array();

 // Select all the rows in the markers table
 $query = "SELECT  `locationLatitude`, `locationLongitude` FROM `location_tab` ";
 $result = $mysqli->query($query) or die('data selection for google map failed: ' . $mysqli->error);

  while ($row = mysqli_fetch_array($result)) {

     $latitudes[] = $row['locationLatitude'];
     $longitudes[] = $row['locationLongitude'];
     $coordinates[] = 'new google.maps.LatLng(' . $row['locationLatitude'] .','. $row['locationLongitude'] .'),';
 }

 //remove the comaa ',' from last coordinate
 $lastcount = count($coordinates)-1;
 $coordinates[$lastcount] = trim($coordinates[$lastcount], ",");	
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Maps</title>
	</head>

	<body>
	    <nav>  
			<ul> 
				<li class="active"><a href="#"><img src="img/map.png"></a></li>
				<li><a href="#"><img src="img/logout.png"></a></li>
			</ul> 
		</nav>

		 <div class="outer-scontainer">
	        <div class="row">
	            <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
	            	<div class="form-area">	      
    					<button type="submit" id="submit" name="import" class="btn-submit">RELOAD DATA</button><br />
					</div>
	            </form>
	        </div>