<?php
define('WP_HOME','http://miraijv.com.vn');
define('WP_SITEURL','http://miraijv.com.vn');
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
define('DB_NAME', 'stitdemo_demo1');

/** MySQL database username */
define('DB_USER', 'stitdemo_admin');

/** MySQL database password */
define('DB_PASSWORD', 'stit2017');

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
define('AUTH_KEY',         '6L`bg]4$3^/oegtt.X;Id#Y_KeA*m=3yC7;qNS u3,-~3X$pIf<Rv]MeiR]xuY}m');
define('SECURE_AUTH_KEY',  ';xEk@{r+0 ~q=h$,fX3{j/XgX=(Tu7P ;-q8$$)Rhi1j&u?D/bQLsP]*9[Q5gKe0');
define('LOGGED_IN_KEY',    'V7KrfX#|B?2rIudeWk=GEpz1Tr^RLKi#=b!5)5rNsA{(DFnc1,l?M =<@CA{at]V');
define('NONCE_KEY',        '#Ryq1Oiw<o3k}T23Y8*qx%zKnpV;-T7Hw,QmPamdRS;v!oM%oxyJF@M}E[ c-DcR');
define('AUTH_SALT',        'nbn*xBuld,SP6|BSgGlp[DH9i-in&Ieop?2F*xUO-7#(yt7vxYmF<=f}?8;^VuxI');
define('SECURE_AUTH_SALT', '.Mx/DKyi=Am>[Y}(Ic,@;1Y4NLTX{>_kQM6?I4$>M5hO`O0vFnbGl&ti,qbE5 Yt');
define('LOGGED_IN_SALT',   '^*-~&p2=[76L8K!LJ+dh)5KG,!v6eW7u-}GJyd4mJT2@^8cz|KL;X2qf&u,Dq6;j');
define('NONCE_SALT',       '9Z?XHhsI@e:aRc%,-ssj7KR?l.F@D}<JA*2&xo{f~8Gncb $yn@rMA87mO:r=$:d');

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
