<?php
/* Smarty version 3.1.33, created on 2019-02-04 10:54:11
  from '/var/www/tiendaOnline/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c580bc3cf4558_58350326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48a225f946455b1b3c603baca4b4f50e0b8dbf90' => 
    array (
      0 => '/var/www/tiendaOnline/template/index.tpl',
      1 => 1549274049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c580bc3cf4558_58350326 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
        <link href="tienda.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="login">
            <form action="index.tpl" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <div><span class="error"></span></div>
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
</html><?php }
}
