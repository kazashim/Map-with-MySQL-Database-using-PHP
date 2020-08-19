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
