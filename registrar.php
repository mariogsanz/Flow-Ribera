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

$query = 'SELECT NOMBRE,APELLIDOS FROM alumnos WHERE ALUMNO = ' . $id;
$alumno = $conn->query($query);

if ($alumno->num_rows > 0) {
    $row = $alumno->fetch_assoc();
    $nombre = $row['NOMBRE'];
    $apellidos = $row['APELLIDOS'];

    $nombreCompleto = $nombre . " " . $apellidos;
}

$errores = '';
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
        <div class="container-fluid text-center p-2 text-bg-warning">
            <h1 class="display-4"><?php echo $nombreCompleto; ?></h1>
        </div>
        <div class="container d-flex flex-column align-items-center mt-4">
            <?php if (isset($_POST['registrar'])) :
                if (empty($_POST['responsable'])) :
                    $errores .= '<li class="list-group-item">Deben recoger al alumno para que pueda salir del centro</li>';
                endif;
                if (empty($_POST['motivo'])) :
                    $errores .= '<li class="list-group-item">Se debe registrar el motivo de la salida</li>';
                endif;
                if ($errores == '') : 
                    $date = date('Y-m-d');
                    echo $date;

                    $query = 'INSERT INTO salidas VALUES (null,' . $id . ',"' . $date . '","' . $_POST['motivo'] . '","' . $_POST['responsable'] . '");';
                    $insertado = $conn->query($query);

                    if (!$insertado){
                        $errores = '<li class="list-group-item">Ha ocurrido un error al registrar la salida</li>';
                    } else {
                        header('Location: alumno.php');
                    }
                endif;
            endif;
            ?>
            <form class="text-center" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-floating">
                    <input type="text" name="responsable" id="responsable" class="form-control" placeholder="Responsable">
                    <label for="responsable">Responsable</label>
                </div>
                <div class="form-floating mt-4">
                    <textarea onkeydown="textarea(this)" class="form-control" name="motivo" id="motivo" cols="30" placeholder="Motivo"></textarea>
                    <label for="motivo">Motivo</label>
                </div>
                <div>
                    <input type="submit" name="registrar" value="Registrar" class="btn btn-success mt-4">
                </div>
                <?php if ($errores != '') : ?>
                    <div class="text-bg-danger mt-4 p-2 rounded text-start">
                        <?php echo $errores; ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <script>
        function textarea(element) {
            element.style.height = "0px";
            element.style.height = (1 + element.scrollHeight) + "px";
        }
    </script>
</body>

</html>