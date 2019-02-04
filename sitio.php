<?php

require_once "Smarty.class.php";

$plantilla = new Smarty();

$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";
$plantilla->display("sitio.tpl");
?>
