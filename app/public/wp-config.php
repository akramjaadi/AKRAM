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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'yORhsOP6hWAJVNjaCP9Z/7HY/Qek4Zfzi5nu98FbtnOkDw3paMo2Us6ymAKHchEFBbPwQIQLmYlGL5dywfFBCQ==');
define('SECURE_AUTH_KEY',  'nyzStG19jv9Fv456+TUM0hZAfmL+ZUeqmElZOhF+7X+JFt11MTaRtrFd10a5BVsxljewZzd2ltafCB5Ju7vRjg==');
define('LOGGED_IN_KEY',    'm+Kk7tfQZjBaymyhNHrBLmbKcKf0SpsiCzJCpY15MCbWOe78RUdhzV7g8JWJcHbaZF8Ro53w7YRQQB13v3xumA==');
define('NONCE_KEY',        'QsxrC0ratpMsmeU1jJxIfUUE2XbDC3kgI4MfgWRTpuXiRtDkEN9Q2XmAsthOeEXCyxQbGoube4H/9sHyhos1RQ==');
define('AUTH_SALT',        'cuDaoDtb+Sq6zpaQzLAaI+UySVQu0LTzI7v0vRoTexpA9ZcDHDA9ydqMNS9xrFe+KH883Lsr58YV6GLSAXBAJw==');
define('SECURE_AUTH_SALT', 'FWRcF8OBD0ytAAtUbYlsaXExSrTBrsAPfEwNQNzXw8LDYrvctjx5IQvz8PqGa+3hPBBn0nP+YF0BuMUeZcF8eg==');
define('LOGGED_IN_SALT',   'oqFs4ueX0VspnMBDdScvw3jmiXfUCPem8UnKuVZ6fO7wOhFdjGcpjaqcl+z8dDuKR00HL7oL0SY566/N8inUdA==');
define('NONCE_SALT',       '6vtEi8DKFZpL0k1L3OGXqAreww8k5kH8F6fVX+nz+QT2O5BHYlJXmpV0rlXjhT6909VnreYBKOlomwZnX2/B5A==');