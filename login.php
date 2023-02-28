

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Ribera</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid d-flex flex-column p-0 h-100">
        <div class="container-fluid p-2 bg-warning d-flex justify-content-center">
            <h1 class="display-4">Flow Ribera</h1>
        </div>
        <div class="container-fluid bg-info d-flex flex-column align-items-center flex-grow-1">
            <div class="container mt-4">
                <form class="container d-flex flex-column align-items-center" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-floating w-100" style="max-width: 400px;">
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="form-floating mt-2 w-100" style="max-width: 400px;">
                        <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña">
                        <label for="pass">Contraseña</label>
                    </div>
                    <input class="btn btn-success mt-2" type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
</body>

</html>