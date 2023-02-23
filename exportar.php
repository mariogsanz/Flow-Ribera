<?php

include 'config.php';

$query = "SELECT * FROM alumnos ORDER BY ALUMNO ASC";

$result = $conn->query($query);

if ($result->num_rows > 0){
    $delimiter = ',';
    $filename = "alumnos_" . date('Y-m-d') . ".csv";

    $f = fopen('php://memory','w');

    $fields = array('ALUMNO','NOMBRE','APELLIDOS');
    fputcsv($f, $fields, $delimiter);

    while ($row = $result->fetch_assoc()){
        $data = array($row['ALUMNO'],$row['NOMBRE'],$row['APELLIDOS']);
        fputcsv($f, $data, $delimiter);
    }

    fseek($f, 0);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    fpassthru($f);
}