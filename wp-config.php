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
define( 'DB_NAME', 'freelancer' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'administrador' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'fer607372785' );

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
define( 'AUTH_KEY', 'KuIB5sp]#Nq< 0y^>J2#4,vnH`grRi)b%,[J[&^Bv 3IDlpF|t_3$u_1Qr1V=sjg' );
define( 'SECURE_AUTH_KEY', 'ZYQC^*W{gSI^Y7Un>iK?/t+w@=/RXJUz~FL(J!qIj&dwH6K#2$Hm@ST_|E;fUEfI' );
define( 'LOGGED_IN_KEY', 'd=%e =&qV4{P@tI5r<851A<9|~7Q &j!{ 3G.XuKG!$o@6SyHH@mY%w@b0ZT{mN=' );
define( 'NONCE_KEY', 'Ddf9&mv2y@1bz8zY/*CKlcYolW<DPgPnn3/p0f_[0r[V?7qt<o)P#TY,D]L@&PVX' );
define( 'AUTH_SALT', 'RHL}W8@*D.t*{{QVdF6]+=rc&L_Fn+^T(!J_%t)|d%,m$kxgXHw.y!7V1<C.N4qO' );
define( 'SECURE_AUTH_SALT', 'Bi^8oKLrG2Gs{EKf^k4[=!WW Z vML7A=;.OJTPT/VRO|ed6~uWX9;aCY5j91L@x' );
define( 'LOGGED_IN_SALT', '{~}[KiS;_`APb9&:spCJ-]OC7n^olGYLDy}%$FRLvATxIn_e4QvJI_VGv|gw[n:=' );
define( 'NONCE_SALT', '5]kw^ZsOk!&kYgsOh33n8`T99uXP3w{foTR&>!tFx[-![KrRVWC|I>Cm[eV{3[k6' );

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

define('FS_METHOD', 'direct');
