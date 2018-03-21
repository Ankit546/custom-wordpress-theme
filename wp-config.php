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
define('DB_NAME', 'test-site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1.Jk>/JOt0f]No~#G,OSGmH[_x?,pmkJ %;GS4/:=_8Y2{A,y0`+E`~Cd;*%*+10');
define('SECURE_AUTH_KEY',  'zLHZiDu%AU;wp1S>)Xy6y]wOTXP]-Jk~haReW$QJD;r*RM1&&N;ymW#@sQ4)?<A{');
define('LOGGED_IN_KEY',    '`$c?g|&JXWi>U3~#<HP]b4jS%&?w^_{RWO{kicN&*VfZS`87m:x7U5gmOj{+WsuX');
define('NONCE_KEY',        'TO|[{g<hFem`Ea@tf;W2,3<Yvz9_z#eAj*ERmow!f?-wb$4Ne|S_6LBnz,CF,h3Q');
define('AUTH_SALT',        'GS, 1yx(P 8S(g#_#r)F`Bu$%,jG6ONLK(8-`V]R7Ou.M7U;L,6.5rI7LmP}/jc6');
define('SECURE_AUTH_SALT', '&){ZKT,85qCa 8I<ng]S407x=n%wj`_-w_8+H6+p3xJ4{Eps(maCE0n.Rhio.TpU');
define('LOGGED_IN_SALT',   '$RBD9J|Qv4<r=2.4P0a%!Wft!b3o:Z9pRC>JX:RGHT_+(nemQ;gDW7otPtL,<~pL');
define('NONCE_SALT',       'Ugd@7Y<J?R,kV]YaHWIBuu#+We)~2$qMqFl$Xa3/^;,2e1I7`SR9{_Zd)j1ktJFU');

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
