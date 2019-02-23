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
$disabled = "";


$listado = obtenerListado($con);
$cesta = Cesta::generaCesta();
$addProducto = $cesta->mostrarCesta();
$plantilla->assign('addProducto', $addProducto);
if ($_POST['accion']) {
    $codigo = $_POST['cod'];
    $precio = $_POST['precio'];
    switch ($_POST['accion']) {
        case "Añadir":
            $cesta->nuevoProd($precio, $codigo);
            break;
        case "Vaciar":
            $cesta->vaciar();
            break;
        case "Pagar":
            header("Location:pagar.php");
            break;
        case "Borrar":
            $cesta->eliminoProducto($codigo);
            break;
        default:
            break;
    }
}
if (is_null($cesta->getProductos()) || empty($cesta->getProductos())) {
    $disabled = "disabled";
    $plantilla->assign('disabled', $disabled);
} else {
    $disabled = "";
}
$cesta->guardaCesta();
$addProducto = $cesta->mostrarCesta();
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
        $familia = $dato['familia'];
        $listado .= "<form action='sitio.php' method='post'>"
                . " <input class='accion' type='submit' value='Añadir' name='accion'>"
                . " <input type='hidden' value='$precio' name='precio'>"
                . " <input type='hidden' value='$cod' name='cod'>";
        if ($familia == "ORDENA") {
            $listado .= "<a href='descripcion.php'>" . $n_corto . " - " . "$precio</a>"
                    . "</form>";
        } else {
            $listado .= $n_corto . " - " . $precio
                    . "</form>";
        }
    }
    return $listado;
}
