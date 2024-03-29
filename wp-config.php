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
define( 'DB_NAME', 'wordpressoc' );

/** MySQL database username */
define( 'DB_USER', 'wordpressoc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S1F941.]qp' );

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
define( 'AUTH_KEY',         'xuny1yx11kgguhqefaugbllsjhhzfa9zjezkagigb5wljvqihiqycy2czvlo19yz' );
define( 'SECURE_AUTH_KEY',  '9mcygiz2lnftsdm3bwfo3app7fux1bnjlm5eam50r0qroaijevyohghvgtuitalk' );
define( 'LOGGED_IN_KEY',    'tbfe0hz1lnmylrhkvhl0wbhfhokcnsdw4mdinmhuiysa0cwmwn7uhmprlmrp3xfe' );
define( 'NONCE_KEY',        'lm8nmogb1y55esnh3uyuoackserhbkvowg0mku7mtxjemq8lzmpvmsrlknysmfqi' );
define( 'AUTH_SALT',        'rz0atm7ek9lp8tijik37qej7ngudfi4oxvw3farncxv8wh00fda1mpsh8fsw5bgr' );
define( 'SECURE_AUTH_SALT', 'kkwk39jlr8enwvo1jb9akmbqe3xodit1n7vqfj2nntwot1u7nrrdpcbdm10sruj7' );
define( 'LOGGED_IN_SALT',   'ortqxitkzwgxh2z4uozhiokis0kr9btfhlm7jj64zsigatxuwt6qvigufq8nj1ue' );
define( 'NONCE_SALT',       'kbdinfmoe641zf75dnazth0veddvu4cxvovii3ycs1jxcwg9uyhxhupwntcuuf6p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsr_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '127.0.0.1');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
