<?php

$host = 'localhost';
$port = '33060';
$user = 'root';
$pass = 'root';
$dbname = 'flowribera';

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_errno){
    die('Error connecting to flowribera');
}

$nombres=array('Nacho','Raul','Manuel','Alejandro','Gianina','Alberto','Ricardo','Eduardo','Alberto','Miguel Ángel','Iván','Álvaro','Germán','Mario','Mario','Olga','Nicolás');

$apellidos=array('Casado de la Rocha','Cespedes','de Castro Ramos','Díaz Élez','Dobre','Espinosa Hormigos','González Riesco','González Stéfani','Martín Lara','Mateos Hernández','Méndez Sánchez','Pascual Cárdenas','Sánchez García','Sanz González','Valdesoiro Gil','Valls Fernández','Villalba Quintanilla');

for ($i=0; $i<count($nombres); $i++) {
    $sql = 'INSERT INTO alumnos (NOMBRE,APELLIDOS) VALUES ("'. $nombres[$i]. '","' . $apellidos[$i] . '")';

    $conn->query($sql);
}