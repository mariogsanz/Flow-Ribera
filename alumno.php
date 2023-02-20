<?php
include 'config.php';

$id = $_POST['id'];

$query = 'SELECT * FROM usuarios WHERE id = ' . $id;
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    $nombre = $row['nombre'];
    $apellido1 = $row['apellido1'];

    $nombreCompleto = "$nombre $apellido1";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords($nombreCompleto) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-fluid d-flex flex-column align-items-center bg-info h-100 p-0">
        <div class="container-fluid bg-warning text-center p-2">
            <h1 class="display-4"><?php echo ucwords($nombreCompleto) ?></h1>
        </div>
    </div>
</body>

</html>