<?php

function conection()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "project_group";

    $connect = mysqli_connect($host, $user, $pass, $bd);

    if (!$connect) {
        return false;
    }

    return $connect;
}

?>