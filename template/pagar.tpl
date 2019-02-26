
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Listado de Productos a Pagar</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body class="pagproductos">

        <div id="contenedor">
            <h1>Resumen de factura del usuario dwes</h1>
            <h4 style="text-align:right">Fecha : {$fecha}</h4>
            <hr />
            <br class="divisor" />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <input name="business" type="hidden" value="pgmcastillo98-facilitator@gmail.com" />
                <input name="shopping_url" type="hidden" value="http://localhost/ZPRACTICAS_PHP_PABLO/tiendaOnline7/pagar.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://localhost/ZPRACTICAS_PHP_PABLO/tiendaOnline7/pagar.php" />
                <input name="notify_url" type="hidden" value="http://localhost/ZPRACTICAS_PHP_PABLO/tiendaOnline7/pagar.php"" />
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
                        {$tabla1}
                    </table>
                    
                    <hr />
                    
                    <table>
                        <thead>
                            <tr class="pago"><th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                        </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago">{$cantidad}</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago">{$total}</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago">{$totalIVA}</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">{$pago}</td>
                        </tr>
                    </table>
                </div>
                        {$hiddenPay}
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

