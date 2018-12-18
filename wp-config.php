<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'gebelin_audi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.^Yb3hrRwH=ILh$}ZNMEj)-`qUG(Ix|2(dW8Q#w 5j{!~OK@lfKDyfK4+Fte)C|3');
define('SECURE_AUTH_KEY', '!|2#)cXc[87.a.~rNTKy  #&J<+DP(mDY:j(+k:=Mbd?#(MY40{>?V|qNGXqa.X2');
define('LOGGED_IN_KEY', '$LOZ.UG=NHJo;xl5N&E|g9n ;tc&4uLr:@X/P]HP!{.R@iF)Gq[LW>,v2V|FFv.B');
define('NONCE_KEY', 's$^Bm~{n6>ntw}*wc9h5D/aBES!W>eXt<s-RrSlOY%<IMQfC>dT_U 5Gg<~hh5Sb');
define('AUTH_SALT', 'Hl)|[.[kITsOWo|:6SBRA!.SZcRH=0X)&Nrh`>NXhgVbb&GwP_HNB4ueXL8glu5!');
define('SECURE_AUTH_SALT', 'A>8UGpuoLwdbZ@5A632(t)q3JT9_@,2C}6Qd@hND%Vj$et[|[Jr?Cjk+t&$3Og~~');
define('LOGGED_IN_SALT', 'nb]a3/-.#_,qK/Zue$d4(O%[B;uA%32[~uz~b$g^Q{;%V_>%Jm;BsD?h3$daQ;zH');
define('NONCE_SALT', '5$9Y8uJY*Azu>c@W.OD5Jv]yKk( CSzoL3zK,[1QgBi$m`M.T$&[k0j%@vOEUA*Q');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

