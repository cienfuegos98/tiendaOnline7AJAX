<?php
/* Smarty version 3.1.33, created on 2019-02-07 13:09:25
  from '/var/www/tiendaOnline3/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c1ff5328892_18995268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586694fcc3561bab98ef62d37faba4a842009c5b' => 
    array (
      0 => '/var/www/tiendaOnline3/template/sitio.tpl',
      1 => 1549541362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c1ff5328892_18995268 (Smarty_Internal_Template $_smarty_tpl) {
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
             <div id="pie">
                <form action="login.php" method="post">
                    <input type="submit" name="desconectar" value="Desconectar">
                </form>        
            </div>
        </div>
    </body>
</html><?php }
}
