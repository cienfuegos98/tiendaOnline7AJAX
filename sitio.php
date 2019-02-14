<?php

error_reporting(0);
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
$cesta = Cesta::generaCesta();
var_dump($cesta);
$addProducto = $cesta->mostrarCesta();
$plantilla->assign('addProducto', $addProducto);
if ($_POST['accion']) {
    $codigo = $_POST['cod'];
    $precio = $_POST['precio'];
    switch ($_POST['accion']) {
        case "Añadir":
            $cesta->nuevoProd($precio, $codigo);
            $addProducto = $cesta->mostrarCesta();

            $cesta->guardaCesta();
            $total = $cesta->calcularTotal();
            $plantilla->assign('total', $total);

            break;
        case "Vaciar":
            $cesta->vaciar();
            $cesta->guardaCesta();
            $addProducto = $cesta->mostrarCesta();
            break;
        case "Pagar":
            header("Location:pagar.php");
            break;
        case "Borrar":

            $cesta->eliminoProducto($codigo);
            $cesta->guardaCesta();
            $addProducto = $cesta->mostrarCesta();
            break;
        default:
            break;
    }
}
$plantilla->assign('addProducto', $addProducto);
$plantilla->assign('listado', $listado);
$plantilla->display("sitio.tpl");

function obtenerListado($con) {
    $listado = "";
    $datos = $con->selection("SELECT * FROM producto");
    foreach ($datos as $dato) {
        $n_corto = $dato['nombre_corto'];
        $precio = $dato['PVP'];
        $cod = $dato['cod'];
        $listado .= "<form action='sitio.php' method='post'>"
                . " <input type='submit' value='Añadir' name='accion'>"
                . " <input type='hidden' value='$precio' name='precio'>"
                . " <input type='hidden' value='$cod' name='cod'>"
                . "  " . $n_corto . " - " . $precio
                . "</form>";
    }
    return $listado;
}
