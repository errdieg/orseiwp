<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'pr19wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'infomart');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Vnf0O05t2z');

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
define('AUTH_KEY', 'X_zc-F17;8*LDU1r{?0nX{Gbpe6WbQ:6S]VuTN@*ug{.ySnM&J[})Xmmk-yy@6_ ');
define('SECURE_AUTH_KEY', 'g*hZEMpZ/2TRtKh!dXvo<tQ1b=YOQmbJ6G3vN:oj>dc,mQ`x?posuR<lv?FgG+88');
define('LOGGED_IN_KEY', '0_p6sP6jXZxBw=79=!1s6T45v@)b@H:}K<}T=3R,{n*]Yt~xRirRN+xl#q[@:mAx');
define('NONCE_KEY', 'M>}<tIZ;/X`-tho6a#fDHgFBQP`*4$Df>18Bv;Kxo)2f_gGZ4L;3|-Xj,~c.opjE');
define('AUTH_SALT', 'KId^|I`04Dt6Venyk|]e+~Q2(XN(#1&XDCE9>@`DSim5&&XgK.88H8a0_cR,ea{9');
define('SECURE_AUTH_SALT', '$(OG#IIA;qF9/YC2Z*|U}J&gPUm*gZphvq#l-sw+t&u3_v~0JH.q<m_K[%q^1(pp');
define('LOGGED_IN_SALT', '5Ef:?A!DF,NSKQ`jpW87XTtp|4t-#YP_sk.]NLh23tb2K>QGk]cn8$.F=oTUM,.)');
define('NONCE_SALT', 'W*AIK9w{9qpZa[>D+mLEF!`w&x[4w9k&&I(3VQ<+%Q#6xuYBl9sHFOZVyaST6c1i');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'orwp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
 define('CONCATENATE_SCRIPTS', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// ** FTP CONFIGURACIÓN PARA AUTO-FTP ** //
define('FTP_HOST', 'orsei.es');
define('FTP_USER', 'orseiaccess');
define('FTP_PASS', 'M0dificam3');