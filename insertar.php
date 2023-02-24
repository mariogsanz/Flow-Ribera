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

$nombres=array('Luis','Nacho','Raul','Manuel','Alejandro','Gianina','Alberto','Ricardo','Eduardo','Alberto','Miguel Ángel','Iván','Álvaro','Germán','Mario','Mario','Olga','Nicolás');

$apellidos=array('Blanco Sosa', 'Casado de la Rocha','Cespedes','de Castro Ramos','Díaz Élez','Dobre','Espinosa Hormigos','González Riesco','González Stéfani','Martín Lara','Mateos Hernández','Méndez Sánchez','Pascual Cárdenas','Sánchez García','Sanz González','Valdesoiro Gil','Valls Fernández','Villalba Quintanilla');

for ($i=0; $i<count($nombres); $i++) {
    $sql = 'INSERT INTO matriculas (ALUMNO,APELLIDOS,NOMBRE,GRUPO) VALUES (' . $i+1 . ',"' . $apellidos[$i] . '","' . $nombres[$i] . '","ASIR");';

    // $conn->query($sql);
}