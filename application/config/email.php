<?php

/*
 * NOTAS:
 *
 * - Hay que entrar en las opciones de seguridad de la cuenta de Google
 *   en https://myaccount.google.com/security y configurar la "Verificación en
 *   dos pasos". A continuación, definir una "Contraseña de aplicación" en
 *   https://security.google.com/settings/security/apppasswords seleccionando
 *   "Otra (nombre personalizado)" en la lista "Seleccionar aplicación".
 *   Usaremos la contraseña que nos aparece (16 letras) en lugar de la
 *   contraseña de la cuenta.
 *
 * - La contraseña se obtiene de la variable de entorno SMTP_PASS, que en
 *   local se puede inyectar creando un archivo .htaccess en el directorio
 *   principal del proyecto, con el siguiente contenido (una línea):
 *
 *      SetEnv SMTP_PASS lacontraseña
 *
 *   O bien se puede poner esa línea directamente en el public/.htaccess
 *   ya existente.
 *
 *   En Heroku se configura desde la interfaz web de administración de la
 *   aplicación, como una variable de configuración.
 *
 * - Fundamental la opción 'newline', o no funcionará.
 */

$config['protocol']  = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'iesdonana@gmail.com';
$config['smtp_pass'] = getenv('SMTP_PASS');
$config['mailtype']  = 'html';
$config['newline']   = "\r\n";

