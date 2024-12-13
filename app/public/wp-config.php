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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'E9pLBTVl5vtAmKem/ag9x+WQcwylj8hZQrFhPuQrZyCqT9SMjzs5L7H9BkQEE+bVMzNnbagIXtD58yA3XkJ5XA==');
define('SECURE_AUTH_KEY',  'EDdLYo+JGO4PqSbb1Qfiu1fUD8cntMOY9EUx6wJTAocIzvjh4+wLJsZd5ZDQ24hNLFAXh8+B7TqVN5piTi57lA==');
define('LOGGED_IN_KEY',    '1EGymYN7eNHHZv1IgCvG/mX+Rn4oCWQ9CjiDe2LYPKRSZInYczwKZ45uTio/VIRxutWvmXicWArHA1dsHzcT/Q==');
define('NONCE_KEY',        'JzqdQgnqAJq6cEZW2AkSuzEE1fp+wqexpQZvOU02nlfqGs6mkq+GVKrI0PM6l409ZCw4edWUa9A54358z9Yv6A==');
define('AUTH_SALT',        'opGwcBcGDjxv5mc1JlD88M29OOIMxc/bnq8xakOOBSEju2h9zMapggPXxmsaGQFB2LX7A1MEU3YqP6LDuB1eaQ==');
define('SECURE_AUTH_SALT', '0ela1ea+epkmS9Xqy2oHCCSRa4aVnKSyPvlnjJbyMcTrOdLlhUA9LGfAcHbNzEBXGU+ydbTLZ45ExASe4ufHtA==');
define('LOGGED_IN_SALT',   '2hpmwcTvWdl2slROJu9eI6RZ/AioejrPblClRYESI1Knv+4/fve5ClL872ZBvFhzdb5sfxeznSOUkVxivLIuXg==');
define('NONCE_SALT',       '6d/CQgdt0vA75Y0fcuCmuqI6dcFNkF5svr/OUT/r78ee44bEVfTxpfPcjPaaXmLW9tHnw1bka0KaknBZDMSz6A==');

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
