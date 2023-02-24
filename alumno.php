<?php
include 'config.php';

$id = $_POST['id'];

$query = 'SELECT * FROM alumnos WHERE ALUMNO = ' . $id;
$alumnos = $conn->query($query);

if ($alumnos->num_rows > 0) {
    $row = $alumnos->fetch_assoc();
    $nombre = $row['NOMBRE'];
    $apellidos = $row['APELLIDOS'];

    $nombreCompleto = "$nombre $apellidos";
}

$query = 'SELECT * FROM matriculas WHERE ALUMNO = ' . $id;
$matriculas = $conn->query($query);

if ($matriculas->num_rows > 0) {
    $row = $matriculas->fetch_assoc();
    $curso = $row['GRUPO'];
}
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
</head>

<body>
    <div class="container-fluid d-flex flex-column align-items-center bg-info h-100 p-0">
        <div class="container-fluid bg-warning text-center p-2">
            <h1 class="display-4"><?php echo $nombreCompleto ?></h1>
        </div>
        <div class="container d-flex flex-column align-items-center mt-4">
            <p><b>Curso: </b><?php echo $curso; ?></p>
            <form class="form-floating" action="registrar.php" method="post">
                <textarea class="form-control border shadow border-dark rounded" name="motivo" id="motivo" cols="30" style="height: 200px;" placeholder="Motivo"></textarea>
                <label for="motivo">Motivo</label>
                <input class="btn" type="submit" value="Registrar">
            </form>
        </div>
    </div>
</body>

</html>