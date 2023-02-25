<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$port = 3306;
$dbname = 'flowribera';

$conn = new mysqli($host,$user,$pass,$dbname,$port);

if ($conn->connect_errno){
    die('Error connecting to database: ' . $conn->connect_errno);
}