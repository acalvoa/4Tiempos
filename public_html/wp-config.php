<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '4tiempos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'shadowfax');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AqLNA/+ZMaBiO{(T1#K$J4/o*_bIBCs[(K 5<jqp2nBY}TXs&.WGjS)6<oLMG~ x');
define('SECURE_AUTH_KEY',  'Q@C#/aDGeB*@.n|ew$}=d`g7u&kao8!~Zq1FQ@LtOoqdhxys.^.O,`-Z]U^nz_;D');
define('LOGGED_IN_KEY',    ' K]<Fs9F~av7^,u%U-?FVBH$}vB%wm!>,pEkBZ@.E-8e>qGDt3F o%>[sQ{kuzyJ');
define('NONCE_KEY',        'qr(M7G>*0&X^|D*Ds&Zf oC_l(;sN(N)>SmQO=!5vS,Uk+:yNw`/`~H[KWb4?f6k');
define('AUTH_SALT',        '6E.]U[A;|>:A#f$5FR5NLmTzY!go*q_08) 08k9uU-;J7/ip!<]=3U*F,XR 4-2E');
define('SECURE_AUTH_SALT', '%sR<a[PdrR|Jgg0}w@(;R`cR*LP$J/+cx~/y?-.A~*voH=b9!_8v$l =e^D`9>~O');
define('LOGGED_IN_SALT',   'u1}ZJ/DV-1;:<pUJW15h$ci8OxwA^dtX!j]X?`=O&zspfx:>ZS:k(RENCkLxBS_j');
define('NONCE_SALT',       ']v4r*>;5dM;)^WCuH&FAAKgF.(F~w)n!@SnkHG+im`K{[: Dc10sHZ97}i+2{Tt<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

