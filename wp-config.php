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
define('DB_NAME', 'devjic_sos');

/** MySQL database username */
define('DB_USER', 'devjic_user');

/** MySQL database password */
define('DB_PASSWORD', 'deVtK//**!!');

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
define('AUTH_KEY',         'cB_mg*:VOidpp,e}9?mL/p!!xh4^8<]sZO%]PE,|G7}5w[.,eSe{4V-/qo&+>6(w');
define('SECURE_AUTH_KEY',  'EFBcBLGH8*y|2=aWWK9EF-Z@ab@aPH2svo{sp>BVQ~8C8Dzc;MM[Wf%nj$PQ40`Q');
define('LOGGED_IN_KEY',    'yDrO5KJQ2=I`[NJ$Oc-7quS_KV?R(vATJ<*40/9Q,y_8r20y(^1$5oZ&a&T^ZX5-');
define('NONCE_KEY',        'l(kUmDTW|23O[z}{~bU|7l_[_2nVkTsW**w)._mPiE#K>J@>2M>^ZbX3Tp]A.NBw');
define('AUTH_SALT',        'JlnH2t`bt{ZekF[vAy*)fT5MvZxp;C0*D~*poS[(x7&pvlwQ6]`aGH]F#Q1adBr4');
define('SECURE_AUTH_SALT', '9ou3.TP6`<,ZADwUte>|B7EvNei=KPS{qi8f=+&[zaR7;Qj(Z9t9$S!jxSq~,f98');
define('LOGGED_IN_SALT',   'gZgCpVcW^W%:9NTBge%G$d0pG!=* #0&cBe?fOQ{;6i:+[KTS<IP^<C^:IbEx2dL');
define('NONCE_SALT',       '+P8$i8jq9f%W6(D8 $Gua/1Qj7?wPfQ:p6]-h]{c_?NGlm&8q.fud@<_GX)UrA;P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sos_';

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
