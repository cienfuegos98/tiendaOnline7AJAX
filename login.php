<?php

require_once "Smarty.class.php";

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

session_start();
$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

if (isset($_POST['enviar'])) {
    $con = new BD();
    $nombre = $_POST['usuario'];
    $pass = $_POST['password'];
    if (!empty($nombre) && !empty($pass)) {
        if ($con->compruebaUsuario($nombre, $pass) == true) {
            $_SESSION['usuario'] = $nombre;
            $_SESSION['pass'] = $pass;
            header("Location:sitio.php");
        } else {
            $error = "Usuario o contraseña desconocidos";
            $plantilla->assign('error', $error);
            $plantilla->display("login.tpl");
        }
    } else {
        $error = "Campos erroneos";
        $plantilla->assign('error', $error);
        $plantilla->display("login.tpl");
    }
} else {
    $error = "";
    if (isset($_GET['error'])) {
        $plantilla->assign('error', $_GET['error']);
    }
    $plantilla->assign('error', $error);
    $plantilla->display("login.tpl");
}


