<?php
include('../conection.php');

$conexion = conection();

$id = null;
$Username = $_POST['Username'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO users VALUE('$id', '$Username', '$Telefono', '$Email', '$Password')";
$query = mysqli_query($conexion, $sql);
if ($query) {
    Header("Location: ../index.php?registro=exitoso");
    exit();
}

?>