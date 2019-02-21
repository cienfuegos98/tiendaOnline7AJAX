<?php

error_reporting(0);
require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$con = new BD();
$cesta = new Cesta();
session_start();

$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

$tabla1 = "<table id = 'tablaPagar' class = 'pago'>"
        . "<thead>"
        . "<tr class = 'pago'>"
        . "<th class = 'pago'>Articulo</th>"
        . "<th class = 'pago'>Cantidad</th>"
        . "<th class = 'pago'>Precio Unitario</th>"
        . "</tr>"
        . "</thead>";
foreach ($cesta->productos as $codigo => $prods) {
    $tabla1 .= "<tr class = 'pago'>"
            . "<td class = 'pago'></td>"
            . "<td class = 'pago'></td>"
            . "<td class = 'pago'></td>"
            . "</tr>";
}
$tabla1 .= "</table>";

$plantilla->assign('tabla1', $tabla1);

$plantilla->display("pagar.tpl");
?>