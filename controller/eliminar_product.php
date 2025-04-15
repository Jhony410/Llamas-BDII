<?php
include('../conection.php');
$conexion = conection();

if (!empty($_GET["id_pr"] and !empty($_GET["img_pr"]))) {
    $id_producto = $_GET["id_pr"];
    $img_producto = $_GET["img_pr"];

    try {
        unlink($img_producto);
    } catch (\Throwable $th) {
        //throw $th;
    }


    $sql = "DELETE FROM product WHERE id_product = $id_producto";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        Header("Location: ../pages/inicio.php?producto=eliminado");
        
    }
    ?>

    <script>
        // no volver a enviar mi form :D
        history.replaceState(null, null, location.pathname);
    </script>


    <?php
}
?>