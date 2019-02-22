<?php

error_reporting(0);
require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$con = new BD();
$cesta = new Cesta();
session_start();
$tabla1 = "";
$tabla2 = "";
$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";
$datos_cesta = $_SESSION['cesta'];

$tabla1 .= "<table id = 'tablaPagar' class = 'pago'>"
        . "<thead>"
        . "<tr class = 'pago'>"
        . "<th class = 'pago'>Articulo</th>"
        . "<th class = 'pago'>Cantidad</th>"
        . "<th class = 'pago'>Precio Unitario</th>"
        . "</tr>"
        . "</thead>"
        . "<tbody>";
$arrayProductos = $datos_cesta->getProductos();



foreach ($arrayProductos as $cod => $prod) {
    $tabla1 .= "<tr class = 'pago'>"
            . "<td class = 'pago'>" . $cod . "</td>"
            . "<td class = 'pago'>" . $prod[0] . "</td>"
            . "<td class = 'pago'>" . $prod[1] . "</td>"
            . "</tr>";
}
$tabla1 .= "</tbody></table>";


foreach ($arrayProductos as $cod => $prod) {
    $cantidad += $prod[0];
}

$total = $cesta->calcularTotal();
echo "---$total---";
$plantilla->assign('total', $total);
$plantilla->assign('cantidad', $cantidad);
$plantilla->assign('tabla1', $tabla1);

$plantilla->display("pagar.tpl");
?>