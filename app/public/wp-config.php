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
define('AUTH_KEY',         'Z5LR0BA4dTAy1u040WGB8nMeqQlJwtTRNwYdJquzt68mDmI1256NlJBJE+VowYU81gEa0dUDN5VKhxh0rt70JA==');
define('SECURE_AUTH_KEY',  'KcgmCzVgrITbtpcQqkTzj6Q+C8qAT5uW+cS5/8pJ+ECYe7zQnvWcp/I6BtolgaqDusxcNdysLp1A/ME2B7EvNA==');
define('LOGGED_IN_KEY',    'mZuk8d7k30irFW9qqENEXJ4256ZqG8sEppkvdMydyrU+Sfj5TjXN603grxvuaLn712VXkgTjpNeIvpWeobeAtA==');
define('NONCE_KEY',        '/7Pzq8eA1YnXwFqGjZa0ing2a+9D4nS7X5iJJA9EJ7j4ZjNIOgjr4SqnVjhdWc6g46k/1cJDzhQw1OeuUkmD3Q==');
define('AUTH_SALT',        'wWGL7vGlTmItsY2JhiS1U0D7Kdkp10YZN+a2hrGHxKCPf05P+ATHDE4Enz/F0q/XXHDpKQCz7GAQ7uvcqAJ+Cw==');
define('SECURE_AUTH_SALT', 'AX8GNFD1vCPe/4PELGbJKxq9E5nh/zTYgijZzOIMALLockFPOiuEgmrXr9LtsZLo63yP8o7lSmRpwpQVJM1ukg==');
define('LOGGED_IN_SALT',   'BDvuKlxvtmA6friPkmXAoQmytW1HnxGHHh3ssqspBeRHcn6AabtfT3OvWxgh2j5Y8JF24zF0LiHMPQVZyqBLtg==');
define('NONCE_SALT',       'CYXYi/3sxoJCT9X4SrfvTfRb3by8EOmNzhgLAoDAa30iyhYg9XJjwaYcfwavQsV0JctiTI8VoKryU9lhTv/V2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
