<html>
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
                     {$addProducto}
                    <hr>
                    {$total}
                </id>
            </div>
            <div id="encabezado">
                <h1>Listado de productos</h1>
            </div>
            <div id="productos">
                {$listado}
            </div>
             <div id="pie">
                <form action="login.php" method="post">
                    <input type="submit" name="desconectar" value="Desconectar">
                </form>        
            </div>
        </div>
    </body>
</html>