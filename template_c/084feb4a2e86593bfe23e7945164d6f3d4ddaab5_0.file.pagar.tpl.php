<?php
/* Smarty version 3.1.33, created on 2019-02-14 09:07:03
  from 'C:\xampp\htdocs\tiendaOnline5\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6521a7698078_37798385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084feb4a2e86593bfe23e7945164d6f3d4ddaab5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline5\\template\\pagar.tpl',
      1 => 1550131451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6521a7698078_37798385 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h4 style="text-align:right">Fecha :14-58-19 08-02-17</h4>
            <hr />
            <br class="divisor" />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input name="cmd" type="hidden" value="_xclick" />
                <input name="upload" type="hidden" value="1" />
                <input name="business" type="hidden" value="manuelromeromiguel-facilitator@gmail.com" />
                <input name="shopping_url" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/pagar.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/pago_realizado.php" />
                <input name="notify_url" type="hidden" value="http://manuel.infenlaces.com/dwes/TiendaPagar/paypal_ipn.php" />
                <input name="rm" type="hidden" value="2" />
                <div class="pago">
                    <table id="tablaPagar" class="pago">
                        <thead>
                            <tr class="pago"><th class="pago">Articulo</th>
                                <th class="pago">Cantidad</th>
                                <th class="pago">Precio Unitario</th></tr>

                        </thead>
                        
                                                    <tr class="pago"><td class="pago">Archos Clipper MP3 2GB negro</td>
                                <td class="pago"></td>
                                <td class="pago">22.07</td>

                            </tr>

                                                    <tr class="pago"><td class="pago">Sony Bravia 32IN FULLHD KDL-32BX400</td>
                                <td class="pago"></td>
                                <td class="pago">294.96</td>

                            </tr>
                           <!-- <input name="item_number_" type="hidden" value="BRAVIA2BX400" />
                            <input name="item_name_" type="hidden" value=""Sony Bravia 32IN FULLHD KDL-32BX400" />
                            <input name="amount_" type="hidden" value="356.90" />
                            <input name="quantity_" type="hidden" value="" />
                            -->                        
                                                    <tr class="pago"><td class="pago">Asus EEEPC 1005PXD N455 1 250 BL</td>
                                <td class="pago"></td>
                                <td class="pago">202.81</td>

                            </tr>
                           <!-- <input name="item_number_" type="hidden" value="EEEPC1005PXD" />
                            <input name="item_name_" type="hidden" value=""Asus EEEPC 1005PXD N455 1 250 BL" />
                            <input name="amount_" type="hidden" value="245.40" />
                            <input name="quantity_" type="hidden" value="" />
                            -->                        
                        
                    </table>
                    <hr />
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago">1</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago">0.00</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago">0.00</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">0</td>
                        </tr>
                    </table>
                </div>



                <input type="hidden" name="item_name" value="Compra de dwes">
                <input type="hidden" name="amount" value="0">
             
            </form>
           

            <div id="pie">
                <form action='logoff.php' method='post'>
                    <input type='submit' name='desconectar' value='Desconectar usuario dwes'/>
                </form>
            </div>

        </div>




    </div>
</body>
</html>



<?php }
}
