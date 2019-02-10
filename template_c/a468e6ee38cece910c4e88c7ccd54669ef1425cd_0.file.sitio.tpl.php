<?php
/* Smarty version 3.1.33, created on 2019-02-11 00:02:24
  from 'C:\xampp\htdocs\tiendaOnline4\template\sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c60ad806b7056_07809685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a468e6ee38cece910c4e88c7ccd54669ef1425cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline4\\template\\sitio.tpl',
      1 => 1549839727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c60ad806b7056_07809685 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>
    <body class="pagproductos">
        <div id="contenedor">
            <div id="cesta">
                <id class="pagcesta">
                    <h3><img src="carrito64.png" alt="Cesta" width="24" height="21"> Cesta</h3>
                    <hr>
                     <?php echo $_smarty_tpl->tpl_vars['addProducto']->value;?>

                    <hr>
                    <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                </id>
            </div>
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
