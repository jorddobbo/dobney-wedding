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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'SWguMbWnDG20+Z0YWOfRwjyz9JMDgbUqm3NIelMcmta8KzzgGGDR37VemoMJvSBadOz9kSUi6/BMdJ9oaJ5u5A==');
define('SECURE_AUTH_KEY',  '9XeVeH0zo04FRTlX5XkVzrJr2A/d/fX1P/q6NeFLzXzt0GaiRB3ivm3zU3NQcWrSivZykmPco6Lzc5lw985qZw==');
define('LOGGED_IN_KEY',    '2kZSCAVqqoQBtrYOjohjER8N+BQjKpRHg5iUcfR5nJ/wDILBjA4xXPS7qEYwVuWPe5i17A71XOEAEOtgcJFLsQ==');
define('NONCE_KEY',        '3M4hAeqMK6F5e3n+HxaEff1joAYrmow9nlq1XoeS+wyQeLz1VByJla59NyCKrKXsEHUP++pHmqngJDgzc1intw==');
define('AUTH_SALT',        'txu/kaG6JDxrfNeUYiKH4EvVnGp2zeCxtqsSIUnD42DFkTRoL8wVjLncqljLpDTrkVBGUISu7bm6JJRy31raug==');
define('SECURE_AUTH_SALT', 'AA8moqQs1g+z0WYPfxmmN15XqTqqfkRwtgmcA9ZCdXW49t+YXGMr44mtTK5WwxBiolBv1YP10yXAoKKmN+zkJQ==');
define('LOGGED_IN_SALT',   'AN7iJ4RW4jfK+T7hHI7b84cQJmQYKoJyf1rn0OQjyHiFDt8tPrupDuDcqpESuqSGDXWDdwFHLaK6VLULKz14yg==');
define('NONCE_SALT',       '1sGsRZfzV5zgfgukyADBh5EhkVJaT7kKHgxsLyu2z/yYosUu9oU8N1RXt93lUOurj8+l7tKXH/JDWZDj0pj4wg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
