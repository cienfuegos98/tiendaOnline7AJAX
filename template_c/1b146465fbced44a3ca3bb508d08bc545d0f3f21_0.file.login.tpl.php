<?php
/* Smarty version 3.1.33, created on 2019-02-07 09:00:42
  from '/var/www/tiendaOnline2/template/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5be5aa0541c1_25124701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b146465fbced44a3ca3bb508d08bc545d0f3f21' => 
    array (
      0 => '/var/www/tiendaOnline2/template/login.tpl',
      1 => 1549525192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5be5aa0541c1_25124701 (Smarty_Internal_Template $_smarty_tpl) {
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
