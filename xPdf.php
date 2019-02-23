<?php

error_reporting(0);
require_once "Smarty.class.php";
require 'PDF.php';

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$con = new BD();
session_start();

$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

$datos_cesta = $_SESSION['cesta'];
$arrayProductos = $datos_cesta->getProductos();



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(15);
$pdf->SetFont('Times', 'B', 12);
$header = array("codigo", "cantidad", "precio");
$pdf->tablaBasica1($header, $arrayProductos);
$header2 = array("Cantidad", "Total sin IVA", "IVA", "Total con IVA");
$cantidad = $_SESSION['cantidad'];
$total = $_SESSION['total'];
$pdf->tablaBasica2($header2, $cantidad, $total);
$pdf->Output();
?>