<?php
/* Smarty version 3.1.33, created on 2019-02-04 11:58:30
  from '/var/www/tiendaOnline/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c581ad6c60fc6_58843795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf301362d50ff160d817209e98c006fcd7a63999' => 
    array (
      0 => '/var/www/tiendaOnline/template/login.tpl',
      1 => 1549277910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c581ad6c60fc6_58843795 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
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
                        <input type="text" name="usuario" id="usuario" maxlength="50"><br>
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" name="password" id="password" maxlength="50"><br>
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
