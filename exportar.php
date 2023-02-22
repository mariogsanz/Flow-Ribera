<?php

include 'config.php';

$query = "SELECT * FROM usuarios ORDER BY id ASC";

$result = $conn->query($query);

if ($result->num_rows > 0){
    $delimiter = ',';
    $filename = "usuarios_" . date('Y-m-d') . ".csv";

    $f = fopen('php://memory','w');

    $fields = array('id','nombre','apellido1');
    fputcsv($f, $fields, $delimiter);

    while ($row = $result->fetch_assoc()){
        $data = array($row['id'],$row['nombre'],$row['apellido1']);
        fputcsv($f, $data, $delimiter);
    }

    fseek($f, 0);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    fpassthru($f);
}