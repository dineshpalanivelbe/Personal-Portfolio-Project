<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_35741814_wp744' );

/** Database username */
define( 'DB_USER', '35741814_1' );

/** Database password */
define( 'DB_PASSWORD', 'Svp-35-Ll6' );

/** Database hostname */
define( 'DB_HOST', 'sql201.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'piwvywvhmp41ovbp7kul6f2pivk2fvscpxbpxhzr80gq3railha6121ikgk9kvav' );
define( 'SECURE_AUTH_KEY',  '1pc9ij8xo0wqzblht3upzryhqrbvoems398xqvjdwchugw6xmtdahxvvbbklobnf' );
define( 'LOGGED_IN_KEY',    '7h8dncwvkdfzw5vphlg7tghx0rcgv7jno3g7ntpedi9ljoqxbcrk5ir6otcml6lj' );
define( 'NONCE_KEY',        '4y6ngf45rqatjfwvc92xceees0ad4yjdzusz7kim32qwl4v26jowcdyfsjud6aco' );
define( 'AUTH_SALT',        'bszdlfx51drvnexk8aazrgi8cxbhrgmzrlrjewkjgnoneoqoxjwoseupmgnkiikw' );
define( 'SECURE_AUTH_SALT', 'takdn2wuu3rho3zibacq9evcwwuutdzb46qth2tulyfl4kh5ueqydoiczj8e6rwm' );
define( 'LOGGED_IN_SALT',   'ykkinb5os2gnq9reurqqhg1ccmbunxfwbz9pqjh96ocp1qamujlb5erhiqdgyxwx' );
define( 'NONCE_SALT',       '7jftup309l6w66ueb33wf3vfidoboopdvut26vd3hartd0wpyaqnjoejckljdsxn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
