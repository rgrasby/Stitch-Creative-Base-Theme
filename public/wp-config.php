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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=60)<.kQV=beM@Hao (SHBlslxiM:UZo6EWuBeLF:f(T(.3DnKG#Ri-k2$=>)PL&');
define('SECURE_AUTH_KEY',  'J5,>[7,O|2HCCD+6HG1-L==w=b2cd6]N YqC4<{@{>}9{2Fb^<ma=_YB`~f*?cG4');
define('LOGGED_IN_KEY',    '}*]RFu#(dw o-?RMn{%;O6)k.VWXM09otHQ|2a<[WiJA4s#Rqg3+lxKKAv1Cm|{#');
define('NONCE_KEY',        'nNXxP5rCu:Y0P3=s_^d]c%^c/rQgqW6%XuT47=odG9{RZ<TV2z(J=]^$gh)DC~j(');
define('AUTH_SALT',        'v8t{{^ttFos`DDw0;J6#WnUJAOPw&Jy=)!(g6yH+*Ir4P%(J!`K)(W9Qq:an~(=^');
define('SECURE_AUTH_SALT', 'fY}nySnW6w3F<jU!Cd&(4iUp~2w<{Q{]%+_z^!KrKI FMCs^$&}-X.CBwk /kq.:');
define('LOGGED_IN_SALT',   'ura`rfhlfb>uqGtXOVq+iPTUh9q4_kai%*{)`A~N`O,*|ZPV~3Z}FX81lExNcx0@');
define('NONCE_SALT',       'cR@y?];`X4+I?j;r+qa,}{Yn$evsgka#%w#d3>mul)Nk,$mmAEZhQL13hLkIca:4');

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
