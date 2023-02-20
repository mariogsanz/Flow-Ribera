<?php

$conn = new mysqli('localhost','root','','ajax');

if ($conn->connect_errno){
    die('Error connecting to database: ' . $conn->connect_errno);
}