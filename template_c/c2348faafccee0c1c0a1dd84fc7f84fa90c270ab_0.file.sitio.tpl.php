<?php
/* Smarty version 3.1.33, created on 2019-02-07 11:57:49
  from '/var/www/tiendaOnline2/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c0f2d80afc2_13943659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2348faafccee0c1c0a1dd84fc7f84fa90c270ab' => 
    array (
      0 => '/var/www/tiendaOnline2/template/sitio.tpl',
      1 => 1549525192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c0f2d80afc2_13943659 (Smarty_Internal_Template $_smarty_tpl) {
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
