<?php session_start();

include 'config.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} else {
    $insertado = false;

    if (isset($_POST['importar'])) {
        if (empty($_FILES['file']['name'])) {
            $errores = 'Introduzca un archivo';
        } else {
            $table = $_POST['tabla'];
            $file = $_FILES['file'];
            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

            if (empty($extension) || $extension != 'csv') {
                $errores = 'Error al leer el archivo';
            } else {
                $csv = fopen($file['tmp_name'], 'r');
                $headers = fgetcsv($csv, 0);
                $rows = array();
                $row_number = 0;

                while ($csv_row = fgetcsv($csv, 0)) {
                    $row_number++;

                    $encoded_row = array_map('utf8_encode', $csv_row);

                    if (count($encoded_row) != count($headers)) {
                        $errores = 'Error al leer el archivo';
                    } else {
                        $rows[] = array_combine($headers, $encoded_row);
                    }
                }

                if ($table === 'alumnos') {
                    $conn->query('SET FOREIGN_KEY_CHECKS = 0');
                    $sql = 'TRUNCATE TABLE alumnos';
                    $conn->query($sql);
                    $conn->query('SET FOREIGN_KEY_CHECKS = 1');

                    foreach ($rows as $row) {
                        $sql = 'INSERT INTO alumnos VALUES (' . $row['ALUMNO'] . ',"' . $row['APELLIDOS'] . '","' . $row['NOMBRE'] . '","' . $row['SEXO'] . '","' . $row['DNI'] . '","' . $row['NIE'] . '","' . $row['FECHA_NACIMIENTO'] . '","' . $row['LOCALIDAD_NACIMIENTO'] . '","' . $row['PROVINCIA_NACIMIENTO'] . '","' . $row['NOMBRE_CORRESPONDENCIA'] . '","' . $row['DOMICILIO'] . '","' . $row['LOCALIDAD'] . '","' . $row['PROVINCIA'] . '","' . $row['TELEFONO'] . '","' . $row['MOVIL'] . '","' . $row['CODIGO_POSTAL'] . '","' . $row['TUTOR1'] . '","' . $row['DNI_TUTOR1'] . '","' . $row['TUTOR2'] . '","' . $row['DNI_TUTOR2'] . '","' . $row['PAIS'] . '","' . $row['NACIONALIDAD'] . '","' . $row['EMAIL_ALUMNO'] . '","' . $row['EMAIL_TUTOR2'] . '","' . $row['EMAIL_TUTOR1'] . '","' . $row['TELEFONOTUTOR1'] . '","' . $row['TELEFONOTUTOR2'] . '","' . $row['MOVILTUTOR1'] . '","' . $row['MOVILTUTOR2'] . '","' . $row['APELLIDO1'] . '","' . $row['APELLIDO2'] . '","' . $row['TIPODOM'] . '","' . $row['NTUTOR1'] . '","' . $row['NTUTOR2'] . '","' . $row['NSS'] . '");';

                        $result = $conn->query($sql);

                        if (!$result) {
                            $errores = 'Ha ocurrido un error al leer al archivo';
                            $insertado = false;
                            break;
                        } else {
                            $insertado = true;
                        }
                    }
                } else if ($table === 'matriculas') {

                    $conn->query('SET FOREIGN_KEY_CHECKS = 0');
                    $sql = 'TRUNCATE TABLE matriculas';
                    $conn->query($sql);
                    $conn->query('SET FOREIGN_KEY_CHECKS = 1');

                    foreach ($rows as $row) {
                        $sql = 'INSERT INTO matriculas VALUES ("' . $row['ALUMNO'] . '","' . $row['APELLIDOS'] . '","' . $row['NOMBRE'] . '","' . $row['MATRICULA'] . '","' . $row['ETAPA'] . '","' . $row['ANNO'] . '","' . $row['TIPO'] . '","' . $row['ESTUDIOS'] . '","' . $row['GRUPO'] . '","' . $row['REPETIDOR'] . '","' . $row['FECHAMATRICULA'] . '","' . $row['CENTRO'] . '","' . $row['PROCEDENCIA'] . '","' . $row['ESTADOMATRICULA'] . '","' . $row['FECHARESMATRICULA'] . '","' . $row['NUM_EXP_CENTRO'] . '","' . $row['PROGRAMA_2'] . '");';
                        $result = $conn->query($sql); 

                        if (!$result) {
                            $errores = 'Ha ocurrido un error al leer al archivo';
                            $insertado = false;
                            break;
                        } else {
                            $insertado = true;
                        }
                    }
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="container-fluid d-flex flex-column h-100 p-0">
        <div class="container-fluid bg-warning p-2">
            <h1 class="display-4 text-center">Admin</h1>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center p-2 bg-info flex-grow-1">
            <div class="d-flex flex-column align-items-center mt-4">
                <p>Selecciona la tabla a importar</p>
                <form class="d-flex flex-column align-items-center" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <select class="form-select" name="tabla" id="tabla">
                        <option value="alumnos">Alumnos</option>
                        <option value="matriculas">Matriculas</option>
                    </select>
                    <input class="form-control mt-2" type="file" name="file" id="file">
                    <input class="mt-2 btn btn-success" name="importar" type="submit" value="Importar">
                    <?php if (!empty($errores)) : ?>
                        <div class="mt-4 p-2 text-bg-danger rounded">
                            <?php echo $errores; ?>
                        </div>
                    <?php endif; ?>
                </form>
                <a href="cerrar.php" class="btn btn-danger mt-5">Cerrar Sesión</a>
                <?php if ($insertado) : ?>
                    <div class="mt-5 text-bg-success p-2 rounded">
                        Archivo importado correctamente
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>