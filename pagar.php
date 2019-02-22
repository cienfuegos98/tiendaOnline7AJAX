<?php

error_reporting(0);
require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});



$con = new BD();
session_start();
$tabla1 = "";

$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

$datos_cesta = $_SESSION['cesta'];
$arrayProductos = $datos_cesta->getProductos();

foreach ($arrayProductos as $cod => $prod) {
    $tabla1 .= "<tr class = 'pago'>"
            . "<td class = 'pago'>" . $cod . "</td>"
            . "<td class = 'pago'>" . $prod[0] . "</td>"
            . "<td class = 'pago'>" . $prod[1] . "</td>"
            . "</tr>";
}
$tabla1 .= "</tbody>";

foreach ($arrayProductos as $cod => $prod) {
    $cantidad += $prod[0];
}

$total = $datos_cesta->calcularTotal();
$totalIVA = $total * 0.21;
$pago = $total + $totalIVA;

$plantilla->assign('total', $total);
$plantilla->assign('totalIVA', $totalIVA);
$plantilla->assign('cantidad', $cantidad);
$plantilla->assign('tabla1', $tabla1);
$plantilla->assign('pago', $pago);
$fecha = date("Y-m-d");

$plantilla->assign('fecha', $fecha);
$plantilla->display("pagar.tpl");
?>