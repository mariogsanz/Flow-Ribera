<?php

include 'config.php';

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT * FROM alumnos WHERE NOMBRE LIKE '{$input}%'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        ?>
        <script>
            $('#dropdown').css('display','block');
        </script>
        <?php
        while ($row = $result->fetch_array()) {
            $id = $row['ALUMNO'];
            $nombre = $row['NOMBRE'];
            $apellidos = $row['APELLIDOS'];

            $search = "$nombre $apellidos";
?>
            <li class="dropdown-item btn" onclick="sendData('<?php echo $id ?>')"><?php echo $search ?></li>
<?php
        }
    }
}
