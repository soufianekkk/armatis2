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
define( 'DB_NAME', 'detqyzvantonin' );

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
define('AUTH_KEY',         'jWHG1LmCGCIcUsctpGspFah17Y5VX0LFxHNOy5JJaq5h+E2FBQe6Qc/YRsGkeZg3fDh7ExsRy7D7bA6l6UlyQA==');
define('SECURE_AUTH_KEY',  'qmPV4CuQxIBQHMMG8QKHeu8hQuBUTipUkmM6QwfEdJqMoOtUxttyIOXv/JiohU2D8kEiJNd4hKdV7q+9izrSjw==');
define('LOGGED_IN_KEY',    'QNarPnI/lxOboaSeCJ47XBfbOLyM+fu8fxtYsc64QdsenfXsb79gmbNtHNqEGQa7R2HPadah+lPmC267gCInCQ==');
define('NONCE_KEY',        'B9U/u48qsnR9ML+G8rPXt/i+IL7aGgWYV7MOYnjJ7UKeQKQtAsbNTAtVG3s4TV0VnkEOCupUYgZosBwrRxguKg==');
define('AUTH_SALT',        'Zt+s68XPdXD167yNXnFISPEbrWMuOfmxu9OrDxUQNrotZu5uAd1jUggOt6CPpt6p0Z3ijS5yiWO7eXoLNP72jA==');
define('SECURE_AUTH_SALT', '4dd2lc5oxdrYY53zg6o8iU9vByySkGuSilwbkEUtZZQbh9tkfBhW5bgh7TsrN6pQXKGYed/KebHFuqtYDK8rvg==');
define('LOGGED_IN_SALT',   'sZhHpHZTaahF82UGZ7OZA/sRYXVzyOa5BJjLw0lZT6nqNACUSBOp1CAzc83ePYjHwbQ9fSSyVWl8dlR+iqFAIA==');
define('NONCE_SALT',       '4S60qlmsia0egAR+z3JG6CBn1gUSlsmulXg+63kJHqDajoV3ml4GJBwY70zKPjV0wfA0XYrJKUo+BX9HwIdCZA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'soda_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
