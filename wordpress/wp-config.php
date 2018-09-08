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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/GORY/Desktop/desafiolatam/semanaonline14/experiencia1/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'semana14_exp1');

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
define('AUTH_KEY',         '{dMT&T?61PtO$[__0HWAd,fG(hJAR wk1P1ee}(JyDG8^kg#`#Cf*5e7=]&41E9+');
define('SECURE_AUTH_KEY',  'f?VLKuiOgPpb.<[L|4UJJch!bG$]/.S?8&^*zWcV&5En[W( f)j,9!^#?js?o3x:');
define('LOGGED_IN_KEY',    'mShPE?oZ/p:t>%b`bB2tIq]uf+E8OZ;)kn.|Fl1Q[]>*#HzRxH4Ndd,eh,Gw1z,*');
define('NONCE_KEY',        'z!=^ 6{`):3M/]v&kxDG$rXHoGd78(<h$.fchK4u;jQi4!`yy>i^HtQ&O0`]p$zq');
define('AUTH_SALT',        'y{},:#?r0|_T}^$pAyQ^Bb$C=ee9}d2)OsQB4wE?];~Gx~_=HzEVY-A7+l^&u[~F');
define('SECURE_AUTH_SALT', '*2@mC)y?qqa~`{MqKZ}4+a.UvH3_!jsvi(j*i4mup*a 00R2:T,@8Y{k#.idAhx9');
define('LOGGED_IN_SALT',   '?p3OWe` ss|YrGwex0+A1f6a!5J)I(0gLpYY-rIxlMRV{m@DhybQe/R4cPdNs0^[');
define('NONCE_SALT',       '3z{m~*+o=w J[)E&/>Y4Bnj5o1jM2|5$!2k0Xx55n|(mbQyI~(1LNe{^O[,azm/A');

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
