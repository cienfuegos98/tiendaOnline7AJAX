<?php

error_reporting(0);
require_once "Smarty.class.php";
require 'PDF.php';

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$con = new BD();
session_start();
$tabla1 = "";

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
$_SESSION['cantidad'] = $cantidad;

$total = $datos_cesta->calcularTotal();
$IVA = $total * 0.21;
$_SESSION['total'] = $total;
$pago = $total + $IVA;
$hiddenPay = "";
$cont = 1;
foreach ($arrayProductos as $cod => $prod) {
    $hiddenPay .= "<input type='hidden' name='item_name_$cont' value='$cod'>"
            . "<input type='hidden' name='item_number_$cont' value='$cod'>"
            . "<input type='hidden' name='amount_$cont' value='$prod[1]'>"
            . "<input name='quantity_$cont' type='hidden' value='$prod[0]' />";

    $cont++;
}

$hiddenPay .= "<input type='hidden' name='item_name_$cont' value='IVA'>"
        . "<input type='hidden' name='item_number_$cont' value='IVA(21%)'>"
        . "<input type='hidden' name='amount_$cont' value='" . $IVA . "'>"
        . "<input name='quantity_$cont' type='hidden' value='1' />";



$plantilla->assign('hiddenPay', $hiddenPay);
$plantilla->assign('total', $total);
$plantilla->assign('totalIVA', $IVA);
$plantilla->assign('cantidad', $cantidad);
$plantilla->assign('tabla1', $tabla1);
$plantilla->assign('pago', $pago);
$fecha = date("Y-m-d");
$plantilla->assign('fecha', $fecha);



$plantilla->display("pagar.tpl");
?>