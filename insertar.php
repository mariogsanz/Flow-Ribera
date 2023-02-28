<?php

include 'config.php';

// $nombres=array('Luis','Nacho','Raul','Manuel','Alejandro','Gianina','Alberto','Ricardo','Eduardo','Alberto','Miguel Ángel','Iván','Álvaro','Germán','Mario','Mario','Olga','Nicolás');

// $apellidos=array('Blanco Sosa', 'Casado de la Rocha','Cespedes','de Castro Ramos','Díaz Élez','Dobre','Espinosa Hormigos','González Riesco','González Stéfani','Martín Lara','Mateos Hernández','Méndez Sánchez','Pascual Cárdenas','Sánchez García','Sanz González','Valdesoiro Gil','Valls Fernández','Villalba Quintanilla');

// $conn->query('SET FOREIGN_KEY_CHECKS=0;');

// $sql = 'TRUNCATE TABLE alumnos;';
// $conn->query($sql);

// $sql = 'TRUNCATE TABLE matriculas;';
// $conn->query($sql);

// $sql = 'TRUNCATE TABLE salidas;';
// $conn->query($sql);

// $conn->query('SET FOREIGN_KEY_CHECKS=1;');

// for ($i=0; $i<count($nombres); $i++) {
//     $sql = 'INSERT INTO alumnos (APELLIDOS,NOMBRE) VALUES ("' . $apellidos[$i] . '","' . $nombres[$i] . '");';
//     $conn->query($sql);

//     $sql = 'INSERT INTO matriculas (ALUMNO,APELLIDOS,NOMBRE,GRUPO,ESTUDIOS) VALUES ('. $i+1 .',"' . $apellidos[$i] . '","' . $nombres[$i] . '","ASIR","Administración de Sistemas Informáticos en Red");';
//     $conn->query($sql);
// }

// $usuario = 'admin';
// $pass = 'asir';

// $pass = hash('sha512', $pass);

// $sql = 'INSERT INTO usuarios VALUES ("' . $usuario . '","' . $pass . '")';

// $conn->query($sql);