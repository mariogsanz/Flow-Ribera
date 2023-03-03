<?php session_start();

if (!isset($_SESSION['usuario'])){
    header('Location: login.php');
} else {
    if (isset($_POST['importar'])){
        if (empty($_FILES['file']['name'])){
            $errores = 'Introduzca un archivo';
        } else {
            $file = file_get_contents($_FILES['file']['tmp_name']);
            $errores = $_POST['tabla'];
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
            </div>
        </div>
    </div>
</body>

</html>