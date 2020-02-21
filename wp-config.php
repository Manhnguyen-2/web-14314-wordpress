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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'manh123' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JPsQ+![?Fr>K/j1[s=VN}N+b5oe-Y;E~y#2Uf4TV[-uUTIi.w{L IP|14=]!rn7k' );
define( 'SECURE_AUTH_KEY',  'z8uMtD/#qC[Vq|/glWK!9sba79bbt~|6[tVtS~X[y0SXATIeExjg5:1_fA]~N([j' );
define( 'LOGGED_IN_KEY',    'EWt2Gqo^p4Yh~CGYX3wyQtEo`fgX(givJFv?vV%j>HEA|-@1!RbUzG}8Bk~}60j=' );
define( 'NONCE_KEY',        'wWz{27hDs.IoJ x~$=$z$ghHk]Wbt]-($<1aU6}1TM _GZ-)zoQxz;`y;e)nn[pB' );
define( 'AUTH_SALT',        '9 (Vp8//]W],]p;kM,rg^YlXKlJFaJz:ypL28=eO.RK5boJ<b5a5wNZ]!6-Eh/%Z' );
define( 'SECURE_AUTH_SALT', '2!PqO[j!%8@LB*Mljr^xh~?]z&1v45!%fFLyG6fEA09co2Yy_uFf4F|Uf(~]l88t' );
define( 'LOGGED_IN_SALT',   'jkMdVS,KG4m3!EnW %t_%XDPDbv7okk1K[a0`{yCK){9@yJ{]rS##|>^LT(rv?ii' );
define( 'NONCE_SALT',       ';P&fH/s[w[xmlJs?3?lMsdxV/cFmmQDD/p I?R{NL>T~dK])~OB8Z*pz@hmXmx&U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
