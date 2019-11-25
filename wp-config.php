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
define( 'DB_NAME', 'wp_travelagency' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'travelagency-admin' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'iSK^6esw@xTC%NK^f&yhk(fRMU3=c2?r^% FdI;VLm=J]%Y9I]OvJoFSggsD3#.j' );
define( 'SECURE_AUTH_KEY', '2.dg-!,f+ATD8s>tNP!{Um:{M.A~]1.!FutpswwrFktie/nD[EHSoeC!)lqd28Sx' );
define( 'LOGGED_IN_KEY', 'o6?pU)L57pxbFJC~%8oaD U2zY8m.8MqEl+S:#]Qf=O1.1P N~3(InQ7N}V(yZ!N' );
define( 'NONCE_KEY', 'B=.O3`:{k6$K/Nu-XYAZV:2HJRfhmF.kW_Q(8UhA5@E2 smLOhc`:@UuUro~;^n&' );
define( 'AUTH_SALT', 'pJrM&vA6,!|WJ 4{I){-#4(Bw{UzQx_PqnsC#ehp1SK=|~]QdxN(HNaPB5]t!)!{' );
define( 'SECURE_AUTH_SALT', '~ ,Z|E;I-hO>QdeHanMe7zbJ*epz6|/IhzJt{X!E[RP&7Kgm0mbK<TGws[k-s|K8' );
define( 'LOGGED_IN_SALT', 'g*2`>%P=|^6.}k-WEC]Pn)*w{9JK?`VEF?.^ ]t@^I3tYm%-D b?E:q&8gPh7_$j' );
define( 'NONCE_SALT', 'Cl54M__]|d)-iqa_u2a*L)N9]D^jzB,T%:4?FbKnGL&i7|NB!-z}%ewi-@P z+Lc' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

