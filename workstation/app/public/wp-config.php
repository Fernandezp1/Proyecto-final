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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9Fiz66vIpU4OxsM/VaxzezJeFLUfY+fF2+wUB1u5y2TgPcvI9cK6WZR9aPmsivqvK6jEsp206zJC5RnTtaloYQ==');
define('SECURE_AUTH_KEY',  'Ktc09/rABJGXUp3kNRfP6ikR05YgYLQRWrvhT1cyq0fZmEiU0eL6CkE3TvdqugvS0TBL842ljqDkhVOQ0y8cJg==');
define('LOGGED_IN_KEY',    't2KjqwJaO9/h9XjkIdi4GhvUoOoFMO+vHsRtRs9LiuWgeaQjEQfZbTu4g/tny51Rvjmpdfnmk5lL7katLF/Hbg==');
define('NONCE_KEY',        'LUfxoU2fZnxm7iGtPiQpDpQ/s2MNzPrkIVEDlwe3Y+xIG1p9f3vwe8oe1UfYW4yb93q2X/ZSPeXu68u+7GpLGg==');
define('AUTH_SALT',        'Pnex+XIYXbjRAEBF2FJ2mc4eARBCCqwmPDDOwmGLVShznBtKhwOWWgTREdBAAqJo6Yk3R/9AQ8nlNGwk+y+g0Q==');
define('SECURE_AUTH_SALT', '7h8WUrawekthXePrPVyGTfdTrA1917R+IgEGzcix5hK615ehb8cUbhrNPac5Sx9xT3xJWSDvws5JrOb3brXtJQ==');
define('LOGGED_IN_SALT',   'npMTNb5FfOhVl1LPaMRZOd3rii249WdOAViDGmPN7E4Wzt5VTjvCcQ+gq+Owg/mISnEZidoZatnbUn8N200G1A==');
define('NONCE_SALT',       'GywsEGfuTyfBC0NQnqU5JuxSLEYNEqm30EPivLd/Au0W1DHCBGOF6nRmmMDC57G6uqKsgOMMmupNVCVZG9iwcQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
