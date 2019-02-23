
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

                <h1>{$nombre}</h1>
                <h2>Codigo: {$cod}</h2>
            </div>
            <div id="detalle">
                <h2>Caracteristicas:</h2>
                <p>Procesador: {$procesador} </p>
                <p>RAM: {$RAM}</p>
                <p>Tarjeta gráfica: {$grafica}</p>
                <p>Unidad óptica: {$optica}</p>
                <p>Sistema operativo: {$SO}</p>
                <p>Otros: {$otros}</p>
                <p>PVP: {$PVP}</p>
                <h2>Descripcion:</h2>
                <p>Características:{$desc}</p>
            </div>

            <br class="divisor" />
            <div id="pie">
                <form action='sitio.php' method='post'>
                    <input type='submit' name='desconectar' value='Cerrar ventana'/>
                </form>
            </div>
        </div>
    </body>