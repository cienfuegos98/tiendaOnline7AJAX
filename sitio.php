<?php

error_reporting(0);
require_once "Smarty.class.php";
require_once "vendor/autoload.php";

use Jaxon\Response\Response;
use Jaxon\Jaxon;

spl_autoload_register(function($nombre_clase) {
    include $nombre_clase . '.php';
});

$ajax = jaxon();

class ServidorAjax {

    public function cambiar() {
        $respuesta = new Response();
        $respuesta->append("e1", "innerHTML", "Esto es un nuevo texto del servidor");
        return $respuesta;
    }

}

$c = new ServidorAjax();
$ajax->register(Jaxon::CALLABLE_OBJECT, new ServidorAjax());
$ajax->processRequest();

echo $ajax->getCss();
echo $ajax->getJs();
echo $ajax->getScript();

$con = new BD();
session_start();

$plantilla = new Smarty();
$plantilla->template_dir = "./template";
$plantilla->compile_dir = "./template_c";

//Comprobamos que no se conecte por url.
if (isset($_SESSION['usuario']) && isset($_SESSION['pass'])) {
    $nombre = $_SESSION['usuario'];
    $pass = $_SESSION['pass'];
} else {
    $error = "Debes conectarte para entrar";
    header("Location:login.php?error=$error");
}

//variable que utilozaremos para desactivar o activar los botones
// en caso de que el array tenga productos o no.
$disabled = "";

//Obtengo los productos, genero la cesta y asigno todo a la plantilla.
$listado = obtenerListado($con);
$cesta = Cesta::generaCesta();
$addProducto = $cesta->mostrarCesta();
$plantilla->assign('addProducto', $addProducto);
if ($_POST['accion']) {
    $codigo = $_POST['cod'];
    $precio = $_POST['precio'];
    switch ($_POST['accion']) {
        //Realizará una acción dependiendo del boton que presione.
        case "Añadir":
            //añade usuario
            $cesta->nuevoProd($precio, $codigo);
            break;
        case "Vaciar":
            //vacia toda la cesta
            $cesta->vaciar();
            break;
        case "Pagar":
            //lleva a la factura
            header("Location:pagar.php");
            break;
        case "Borrar":
            //elimina solo un producto
            $cesta->eliminoProducto($codigo);
            break;
        default:
            break;
    }
}

//Si el array esta vacio los botones estarán desactivados
if (is_null($cesta->getProductos()) || empty($cesta->getProductos())) {
    $disabled = "disabled";
    $plantilla->assign('disabled', $disabled);
} else {
    $disabled = "";
}

//Guardo todo lo realizado y lo asigno en la plantilla
$cesta->guardaCesta();
$addProducto = $cesta->mostrarCesta();
$plantilla->assign('addProducto', $addProducto);
$plantilla->assign('listado', $listado);
$plantilla->display("sitio.tpl");

//Devuelve una variable con el html de un formulario con el listado de productos.
function obtenerListado($con) {
    $listado = "";
    $datos = $con->selection("SELECT * FROM producto");
    foreach ($datos as $dato) {
        $n_corto = $dato['nombre_corto'];
        $precio = $dato['PVP'];
        $cod = $dato['cod'];
        $familia = $dato['familia'];
        $listado .= "<form action='sitio.php' method='post' onsubmit='return false;'>"
                . " <input class='' type='submit' value='Añadir' name='accion'>"
                . " <input type='hidden' value='$precio' name='precio'>"
                . " <input type='hidden' value='$cod' name='cod'>"
                . "<button onclick='cambiar()'>Click me please to see the magic</button>";

        //Si la familia del producto es ordenador, entonces sera un link que nos lleve a su descripcion.
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
