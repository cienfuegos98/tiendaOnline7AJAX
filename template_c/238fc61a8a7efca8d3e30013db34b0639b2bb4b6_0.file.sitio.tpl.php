<?php
/* Smarty version 3.1.33, created on 2019-02-05 00:26:40
  from 'C:\xampp\htdocs\tiendaOnline2\template\sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58ca30bf3874_69447313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '238fc61a8a7efca8d3e30013db34b0639b2bb4b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline2\\template\\sitio.tpl',
      1 => 1549322798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58ca30bf3874_69447313 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="contenedor">
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
 
            <div id="productos">
                <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

            </div>
        </div>
    </body>
</html><?php }
}
