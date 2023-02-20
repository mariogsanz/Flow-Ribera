<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Ribera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid p-0 h-100 d-flex flex-column align-items-center">
        <div class="container-fluid text-bg-warning text-center p-2">
            <h1 class="display-4">Flow Ribera</h1>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center bg-info flex-grow-1">
            <div class="container dropdown w-75 mt-4">
                <form class="form-floating" action="alumno.php" method="post" id="form">
                    <input type="text" name="id" id="id" hidden>
                    <input type="text" name="alumno" id="alumno" class="form-control border-secondary shadow" placeholder="Alumno" autocomplete="off">
                    <label for="alumno">Alumno</label>
                    <div id="dropdown" class="dropdown-menu w-100"></div>
                </form>
            </div>
            <div class="container d-flex justify-content-center mt-4">
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="import" id="import" hidden>
                    <label class="btn btn-success me-2" for="import"><i class="bi bi-upload"></i> Importar</label>
                </form>
                <a class="btn btn-primary ms-2" href="#"><i class="bi bi-download"></i> Exportar</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#alumno').keyup(function() {
                var input = $(this).val();

                if (input != '') {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $('#dropdown').html(data);
                        }
                    });
                } else {
                    $('#dropdown').css('display', 'none');
                }
            });
        });

        function sendData(data) {
            $('#id').val(data);

            $('#form').submit();
            $('#form').reset();
        }
    </script>
</body>

</html>