<?php
/* Smarty version 3.1.33, created on 2019-02-26 10:49:29
  from '/var/www/tiendaOnline7AJAX/template/descripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750ba9789ae4_96324440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e608c2ba9551f5c05cba9ba85995a7008f23587b' => 
    array (
      0 => '/var/www/tiendaOnline7AJAX/template/descripcion.tpl',
      1 => 1551023400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c750ba9789ae4_96324440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Tarea Tema 5: Detalle de producto tipo ordenador</title>
         <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagdetalleproducto">

        <div id="contenedor">
            <div id="encabezado">

                <h1><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
                <h2>Codigo: <?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
</h2>
            </div>
            <div id="detalle">
                <h2>Caracteristicas:</h2>
                <p>Procesador: <?php echo $_smarty_tpl->tpl_vars['procesador']->value;?>
 </p>
                <p>RAM: <?php echo $_smarty_tpl->tpl_vars['RAM']->value;?>
</p>
                <p>Tarjeta gráfica: <?php echo $_smarty_tpl->tpl_vars['grafica']->value;?>
</p>
                <p>Unidad óptica: <?php echo $_smarty_tpl->tpl_vars['optica']->value;?>
</p>
                <p>Sistema operativo: <?php echo $_smarty_tpl->tpl_vars['SO']->value;?>
</p>
                <p>Otros: <?php echo $_smarty_tpl->tpl_vars['otros']->value;?>
</p>
                <p>PVP: <?php echo $_smarty_tpl->tpl_vars['PVP']->value;?>
</p>
                <h2>Descripcion:</h2>
                <p>Características:<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p>
            </div>

            <br class="divisor" />
            <div id="pie">
                <form action='sitio.php' method='post'>
                    <input type='submit' name='desconectar' value='Cerrar ventana'/>
                </form>
            </div>
        </div>
    </body><?php }
}
