<?php

include('../conection.php');
$conexion = conection();

$directorio = "../images/";

if (isset($_POST["btnregister"])) {
    $name_product = $_POST['name_product'];
    $description_product = $_POST['description_product'];
    $price_product = $_POST['price_product'];
    $stock_product = $_POST['stock_product'];
    $category_product = $_POST['category_product'];
    $img_product = $_FILES['img_product']["tmp_name"];
    $nombre_imagen = $_FILES['img_product']["name"];
    $tipo_imagen = strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
    $size_imagen = $_FILES['img_product']['size'];
    $name_final_img = $directorio . $nombre_imagen;

    if ($tipo_imagen == "jpg" or $tipo_imagen == "png" or $tipo_imagen == "jpeg") {

        $sql = "INSERT INTO product 
        (name_product, description_product, price_product, stock_product, category_product, img_product) 
        VALUES ('$name_product', '$description_product', '$price_product', '$stock_product', '$category_product', '$name_final_img')";

        $query = mysqli_query($conexion, $sql);

        if ($query && move_uploaded_file($img_product, $directorio . $nombre_imagen)) {
            Header("Location: ../pages/inicio.php?producto=registrado");
        } else {

        }

    } else {

    }
    ?>

    <script>
        // no volver a enviar mi form :D
        history.replaceState(null, null, location.pathname);
    </script>


    <?php
}
?>