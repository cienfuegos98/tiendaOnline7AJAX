<?php

error_reporting(0);
require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});
$con = new BD();
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['pass'])) {
    $nombre = $_SESSION['usuario'];
    $pass = $_SESSION['pass'];
} else {
    $error = "Debes conectarte para entrar";
    header("Location:login.php?error=$error");
}


$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

$dato = $con->selection("SELECT*FROM ordenador");
foreach ($dato as $datos) {
    $cod = $datos['cod'];
    $procesador = $datos['procesador'];
    $RAM = $datos['RAM'];
    $disco = $datos['disco'];
    $grafica = $datos['gráfica'];
    $SO = $datos['unidadoptica'];
    $optica = $datos['unidadoptica'];
    $otros = $datos['otros'];
}

$value = $con->selection("SELECT*FROM producto");
foreach ($value as $values) {
    $desc = $values['descripcion'];
    $PVP = $values['PVP'];
    $nombre = $values['nombre_corto'];
}


$plantilla->assign('cod', $cod);
$plantilla->assign('otros', $otros);
$plantilla->assign('procesador', $procesador);
$plantilla->assign('RAM', $RAM);
$plantilla->assign('disco', $disco);
$plantilla->assign('grafica', $grafica);
$plantilla->assign('SO', $SO);
$plantilla->assign('optica', $optica);

$plantilla->assign('desc', $desc);
$plantilla->assign('PVP', $PVP);
$plantilla->assign('nombre', $nombre);


$plantilla->display("descripcion.tpl");
?>