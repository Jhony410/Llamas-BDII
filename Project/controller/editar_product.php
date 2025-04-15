<?php

include('../conection.php');
$conexion = conection();

$directorio = "../images/";

if (isset($_POST["btnEditar"])) {
    $id_product = $_POST['id_product'];
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

    if (is_file($img_product)) {
        if ($tipo_imagen == "jpg" || $tipo_imagen == "png" || $tipo_imagen == "jpeg") {
            try {
                $sql_get_image = "SELECT img_product FROM product WHERE id_product = '$id_product'";
                $result = mysqli_query($conexion, $sql_get_image);
                $row = mysqli_fetch_assoc($result);
                $old_image = $row['img_product'];

                if (is_file($old_image)) {
                    unlink($old_image);
                }
            } catch (\Throwable $th) {
            }

            $sql = "UPDATE product 
            SET name_product = '$name_product', description_product = '$description_product', price_product = '$price_product', stock_product = '$stock_product', category_product = '$category_product', img_product = '$name_final_img' WHERE id_product = '$id_product'";

            $query = mysqli_query($conexion, $sql);

            if ($query && move_uploaded_file($img_product, $directorio . $nombre_imagen)) {
                Header("Location: ../pages/inicio.php");
            } else {
                echo "Error al actualizar el producto.";
            }
        } else {
            echo "Solo se permiten imágenes JPG, PNG o JPEG.";
        }
    } else {
        $sql = "UPDATE product 
                SET name_product = '$name_product', description_product = '$description_product', price_product = '$price_product', stock_product = '$stock_product', category_product = '$category_product' WHERE id_product = '$id_product'";

        $query = mysqli_query($conexion, $sql);

        if ($query) {
            Header("Location: ../pages/inicio.php?producto=editado");
        } else {
            echo "Error al actualizar el producto.";
        }
    }

    ?>

    <script>
        // no volver a enviar mi form :D
        history.replaceState(null, null, location.pathname);
    </script>


    <?php
}
?>