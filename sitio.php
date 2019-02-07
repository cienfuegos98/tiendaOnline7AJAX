<?php

require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});
$con = new BD();
session_start();

$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";


if (isset($_SESSION['usuario']) && isset($_SESSION['pass'])) {
    $nombre = $_SESSION['usuario'];
    $pass = $_SESSION['pass'];
} else {
    $error = "Debes conectarte para entrar";
    header("Location:login.php?error=$error");
}

$listado = obtenerListado($con);
$plantilla->assign('listado', $listado);
$plantilla->display("sitio.tpl");

function obtenerListado($con) {
    $listado = "";
    $datos = $con->selection("SELECT * FROM producto");
    foreach ($datos as $dato) {
        $n_corto = $dato['nombre_corto'];
        $precio = $dato['PVP'];
        $listado .= "<form action='sitio.php' method='post'>"
                . "<input type='submit' value'Añadir' name='datos'>"
                . $n_corto . $precio
                . "</form>";
    }
    return $listado;
}
