<?php session_start();
include 'config.php';

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['id'] = $_POST['id'];
        $id = $_SESSION['id'];
    } else {
        header('Location: index.php');
    }
}

$query = 'SELECT * FROM alumnos WHERE ALUMNO = ' . $id;
$alumnos = $conn->query($query);

if ($alumnos->num_rows > 0) {
    $row = $alumnos->fetch_assoc();

    $nombre = $row['NOMBRE'];
    $apellidos = $row['APELLIDOS'];
    $sexo = $row['SEXO'];
    $dni = $row['DNI'];
    $nie = $row['NIE'];
    $fecha_nacimiento = $row['FECHA_NACIMIENTO'];
    $domicilio = $row['DOMICILIO'];
    $localidad = $row['LOCALIDAD'];
    $provincia = $row['PROVINCIA'];
    $telefono = $row['TELEFONO'];
    $codigo_postal = $row['CODIGO_POSTAL'];
    $pais = $row['PAIS'];
    $email_alumno = $row['EMAIL_ALUMNO'];

    $dni_tutor1 = $row['DNI_TUTOR1'];
    $apellido1 = $row['APELLIDO1'];
    $ntutor1 = $row['NTUTOR1'];
    $email_tutor1 = $row['EMAIL_TUTOR1'];
    $telefonotutor1 = $row['TELEFONOTUTOR1'];

    $dni_tutor2 = $row['DNI_TUTOR2'];
    $apellido2 = $row['APELLIDO2'];
    $ntutor2 = $row['NTUTOR2'];
    $email_tutor2 = $row['EMAIL_TUTOR2'];
    $telefonotutor2 = $row['TELEFONOTUTOR2'];

    $nombreCompleto = "$nombre $apellidos";
}

$query = 'SELECT * FROM matriculas WHERE ALUMNO = ' . $id;
$matriculas = $conn->query($query);

if ($matriculas->num_rows > 0) {
    $row = $matriculas->fetch_assoc();
    $curso = $row['GRUPO'];
    $estudios = $row['ESTUDIOS'];
}

$query = 'SELECT * FROM salidas WHERE ALUMNO = ' . $id;
$salidas = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreCompleto ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid d-flex flex-column align-items-center bg-info h-100 p-0">
        <div class="container-fluid bg-warning text-center p-2">
            <h1 class="display-4"><?php echo $nombreCompleto ?></h1>
        </div>
        <div class="container d-flex flex-column align-items-center mt-4">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><b>Sexo: </b><?php echo $sexo; ?></td>
                        <td><b>DNI: </b><?php echo $dni; ?></td>
                        <td><b>NIE: </b><?php echo $nie; ?></td>
                    </tr>
                    <tr>
                        <td><b>Fecha Nacimiento: </b><?php echo $fecha_nacimiento; ?></td>
                        <td><b>Domicilio: </b><?php echo $domicilio; ?></td>
                        <td><b>Localidad: </b><?php echo $localidad; ?></td>
                    </tr>
                    <tr>
                        <td><b>Provincia: </b><?php echo $provincia; ?></td>
                        <td><b>Teléfono: </b><?php echo $telefono; ?></td>
                        <td><b>Código Postal: </b><?php echo $codigo_postal; ?></td>
                    </tr>
                    <tr>
                        <td><b>País: </b><?php echo $pais; ?></td>
                        <td><b>Email: </b><?php echo $email_alumno; ?></td>
                    </tr>
                </tbody>
            </table>
            <form id="registrar" class="mt-4" action="registrar.php" method="post">
                <input class="btn btn-success" type="submit" value="Registrar Salida">
            </form>

            <table class="table table-striped table-borderless mt-4">
                <?php if ($salidas->num_rows > 0) : ?>
                    <thead>
                        <tr class="table-active">
                            <th>Fecha</th>
                            <th>Motivo</th>
                            <th>Responsable</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $salidas->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['FECHA'] ?></td>
                                <td><?php echo $row['MOTIVO'] ?></td>
                                <td><?php echo $row['RESPONSABLE'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>