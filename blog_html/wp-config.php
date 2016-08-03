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
define('DB_NAME', '4tiempos_blog');

/** MySQL database username */
define('DB_USER', '4tiempos');

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
define('AUTH_KEY',         '.,q1t+u|BwYF!f2WM:hl7^D3$28Rn+6?kz#;thQ)BL@-q*Of3FTV#d+:q`go/m(W');
define('SECURE_AUTH_KEY',  'IH;0Q43vHFQyhDUrU2Dx[7I#lblcoPHS5 rZWR@0tVRrd.GBcBQ00NW), o5:<w^');
define('LOGGED_IN_KEY',    '[7?FTUpg%REprIYU>KGx~;5r]nD?/y:BY.8Yr_=)79-J:Z}4TT=%n$IU?)f$z2&p');
define('NONCE_KEY',        'x/f$SG|8w`E!r7J(plb_mE~WzndHYIxq<pTu3BF;O_-H{Q&0Si4q%[Xa}m==BE3-');
define('AUTH_SALT',        'TKNA.q7 {Ggl-=`mZ/^pf<l&}W7`Eu!^wf:d[lsda^4D|ds9pizK|(CG {54M9G.');
define('SECURE_AUTH_SALT', 'VZv4=Bc<3mxN}issH@Myn6ICTZk$XysCkZ4<|Ak*=cwCt6V:LVQ*]U4%Bd0zP6M6');
define('LOGGED_IN_SALT',   '<S<>^/$3Q%HpM[t18fb6PeM>D#bh]ux8)w!zZNx6!?-@9q|~Tq@n5^cy Ed^/[A=');
define('NONCE_SALT',       'Jr,iW$ZXw(c8YGm5M}-s=H[,$*SW!AQ&{ e::Eay&FSR]s{r{)dG$.k4h4Z5fRG,');

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
