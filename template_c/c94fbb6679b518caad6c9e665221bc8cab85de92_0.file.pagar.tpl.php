<?php
/* Smarty version 3.1.33, created on 2019-02-23 20:17:14
  from 'C:\xampp\htdocs\tiendaOnline7\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c719c3a22d263_39190209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94fbb6679b518caad6c9e665221bc8cab85de92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline7\\template\\pagar.tpl',
      1 => 1550949425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c719c3a22d263_39190209 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario dwes</h1>
            <h4 style="text-align:right">Fecha : <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</h4>
            <hr />
            <br class="divisor" />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <input name="business" type="hidden" value="pgmcastillo98-facilitator@gmail.com" />
                <input name="shopping_url" type="hidden" value="http://localhost/tiendaOnline6/pagar.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://localhost/tiendaOnline6/pagar.php" />
                <input name="notify_url" type="hidden" value="http://localhost/tiendaOnline6/pagar.php" />
                <input name="rm" type="hidden" value="2" />

                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['tabla1']->value;?>

                    </table>
                    
                    <hr />
                    
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['totalIVA']->value;?>
</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['pago']->value;?>
</td>
                        </tr>
                    </table>
                </div>
                        <?php echo $_smarty_tpl->tpl_vars['hiddenPay']->value;?>

                        <br>
                        
              
                  COMPRA ESTO
                  <br><input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
             </form>
                <form action="login.php">
                    <input type='submit' name='desconectar' value='Desconectar usuario'/>        
                </form>
                <form action="xPdf.php" method="POST">
                    <input type='submit' name='imprimir' value='Imprimir'/>
                </form>
                <form action="sitio.php" method="POST">
                    <input type='submit' name='atras' value='Atras'/>
                </form>
               
          
        
    </body>
</html>

<?php }
}
