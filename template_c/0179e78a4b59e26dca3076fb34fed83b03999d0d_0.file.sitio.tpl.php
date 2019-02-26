<?php
/* Smarty version 3.1.33, created on 2019-02-26 10:57:54
  from '/var/www/tiendaOnline7AJAX/template/sitio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750da2051d13_33906907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0179e78a4b59e26dca3076fb34fed83b03999d0d' => 
    array (
      0 => '/var/www/tiendaOnline7AJAX/template/sitio.tpl',
      1 => 1551175069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c750da2051d13_33906907 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos con Plantillas</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>
    <?php echo '<script'; ?>
>

        function cambiar() {
            JaxonServidorAjax.cambiar();
            return false;
        }
    <?php echo '</script'; ?>
>
    <body class="pagproductos">
        <div id="contenedor">
            <div id="encabezado">
                <h1>Listado de Productos </h1>
            </div>
                <div id=""contenedor>
                    <div id="cesta">
                        <div class="pagcesta">
                            <h3><img class="carrito" src="estilos/carrito.png" alt="Cesta" width="24" height="21"> Cesta</h3>
                            <hr/>
                             <?php echo $_smarty_tpl->tpl_vars['addProducto']->value;?>

                             <div id='e1'>  hola </div>
                            <hr />
                            <form action='sitio.php' method ='post'>
                                <input class='cestaAccion1' type='submit' src='pagar.png' name='accion' value='Pagar' <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                                <input class='cestaAccion2' type='submit' src='vaciarTodo.png' name='accion' value='Vaciar' <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                            </form>
                        </div>
                    </div>
                </div>
            
                        <div id=""contenedor>
                <div id="productos">
                     
                    <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

                    
                </div>
                 
                </div>
                 <br class="divisor" />
                 
             <div id="pie">
                <form action="login.php" method="post">
                    <input type="submit" name="desconectar" value="Desconectar">
                    
                </form>        
            </div>
                 
        </div>
    </body>
</html><?php }
}
