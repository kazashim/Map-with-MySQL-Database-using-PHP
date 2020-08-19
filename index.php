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