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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'S|}n 1>F51qkF&<+XGTlRRG_hS(%,os*~M>3%i8xX!UUwf(8.11yOSTFS63qaq;1');
define('SECURE_AUTH_KEY',  'D+sHL zQ-`)9X<pd%~Fl8an1K1:+|q.d^mA/KgdVRBCRz3~ku?]Kp+TT#NPl)$!U');
define('LOGGED_IN_KEY',    'YC`6#qB]Y7pFm:I4q63v8oQ8b/leF.v0F~CJj~;Oxl2QYm5T598-n/R`8(GhySs;');
define('NONCE_KEY',        '-Bn`i!Y5~c!Fgqexj%Hz6#qJ|lFSIigfhpp;nKReYuw.09@F|CS][v!&6fDL]9&L');
define('AUTH_SALT',        'Mvoa=|eZ?/EU?NC[48Z>~5|m(<mN>6v,C$J5~.p*|%{Nq=hCx7Ae-NW<,bV?bpLP');
define('SECURE_AUTH_SALT', 'kKh {[j+}i5o6Ai^L&=l{M~q12bsW<rLu8Py|w (h;,*!MG?^f17+-+e-hXr9EC>');
define('LOGGED_IN_SALT',   '.*zhtY#z.J9R>6b3!s#e##xE{]<@:J6jjs)^(mya02O8YEe,|c*z1k3Sxdv}Ls%w');
define('NONCE_SALT',       '[5Z~O^z,-jw5-D2ad8=C-/-Lda)^[KQL74Ps6va+1np}`Ul3s3T;|u9S8#DZq$hE');

define( 'FS_METHOD', 'direct' );
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
