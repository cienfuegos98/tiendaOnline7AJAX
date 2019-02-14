<?php
/* Smarty version 3.1.33, created on 2019-02-13 18:43:41
  from 'C:\xampp\htdocs\tiendaOnline5\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c64574dc33784_13775627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a275dd9298c2092fcfdb91b4654543d81674f51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline5\\template\\login.tpl',
      1 => 1550079812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64574dc33784_13775627 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
        <link href="estilos/tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="login">
            <form action="login.php" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <div><span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                    <div class="campo">
                        <label for="usuario">Usuario:</label><br>
                        <input type="text" value="dwes" name="usuario" id="usuario" maxlength="50"><br>
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" value="abc123." name="password" id="password" maxlength="50"><br>
                    </div>

                    <div class="campo">
                        <input type="submit" name="enviar" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </div>

    </body>
</html>

<?php }
}
