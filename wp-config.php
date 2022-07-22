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
define('AUTH_KEY',         '/Ej5AojhmIJTgMgDGy7l08eN2Rv21EpRsE8y4igoB8P/ktIOYUrViZQbf4+IS2YL/PihSSKehLWr/MnYi5HrPQ==');
define('SECURE_AUTH_KEY',  'LeDeN1k9an39SBZZbjBq0dqAluLKwSEhOg3Yepr9Cuyo1ZJ2exU9fa2CR448Y/f5GT7TjkUfr7R+ENmMLvZqug==');
define('LOGGED_IN_KEY',    'PPaDhtuF/5C7W96USjnpvKBw/nFRh12ROUKcwJDhZit8mNkStJ3onPLQP7i0N/GfMXz0n66FQjYk97IbvqRNUw==');
define('NONCE_KEY',        '0Zdc5QPMATVeBKK8+O9NY3QYOGCVIliEJ+LEJAca1FlElBN+9XnOmY+o5sZQU35NxKhkTQLamezjPeHItTKcAw==');
define('AUTH_SALT',        'N6LtQAoLRdLVruA1jEAuVA0beIgh/pZ9X10LSzntBmOZ1hSlopQiL4GhBg4LOdcLAlpLibbUJWSE31ai+bu9Eg==');
define('SECURE_AUTH_SALT', 'yrMtm7XtSurtMZnseyF6vZkbVSii6VZG+UMkxRxm5qSkW8CooIxle6uhGb4vPTSHmhvUA7EWkzdZmjMyOtVUMg==');
define('LOGGED_IN_SALT',   '5+58thZpX2RZJ5V7JlZDX1YSFmlaRl5bKnHRXGALULqnEriBCWkUetz00FwPQeDXBaHInRMx0PhoMwDNvd5p/Q==');
define('NONCE_SALT',       'ANnzvAPJeXIQK70KWhlOTWXZmKzbAuDUGmIWSiR7fooMgIWmCzj0C4m/H4aCsFJS3QcCgC2MaYgEF3g9jXt5rg==');

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
