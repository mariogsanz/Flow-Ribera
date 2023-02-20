<?php

include 'config.php';

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT * FROM usuarios WHERE nombre LIKE '{$input}%'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        ?>
        <script>
            $('#dropdown').css('display','block');
        </script>
        <?php
        while ($row = $result->fetch_array()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $apellido1 = $row['apellido1'];

            $search = "$nombre $apellido1";
?>
            <li class="dropdown-item btn text-capitalize" onclick="sendData('<?php echo $id ?>')"><?php echo $search ?></li>
<?php
        }
    }
}
