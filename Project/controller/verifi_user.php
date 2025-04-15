<?php
include("../conection.php");
$conexion = conection();
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Pasword'];


    $query = "SELECT * FROM users WHERE email_user = '$email'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $pass = $data['password_user'];
        $verify_pass = $password == $pass;

        if ($verify_pass) {

            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username_user'] = $data['username_user'];
            $_SESSION['telefono_user'] = $data['telefono_user'];
            $_SESSION['email_user'] = $data['email_user'];
            $_SESSION['password_user'] = $data['password_user'];

            Header("Location: ../pages/inicio.php?register=yes");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
