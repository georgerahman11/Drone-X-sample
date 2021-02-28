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
define( 'DB_NAME', 'george' );

/** MySQL database username */
define( 'DB_USER', 'george' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AEkDERfoWyWmnn43' );

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
define( 'AUTH_KEY',         'SG]73.3T*akYC^{=RRuoY:jnUhQc0zNXvXA}(o6Q:r(J V$iIjO(Hqkl5{N>1SS~' );
define( 'SECURE_AUTH_KEY',  't=UIn.I@-]d/pp:s{q >6?eQ/KcNUBfl2]PQD<nOMAXsn*ioc *S>B,9Fw_V;S^[' );
define( 'LOGGED_IN_KEY',    '$bBt%mp XGOv*+|$D4R$cG0wr.OJSN~V4uDUvs0l;a<=cYQ)efOY?)F|s%1AKpWZ' );
define( 'NONCE_KEY',        'azK8:`Bs c$+O!M!|$D4uIf6NZ(uQnM}0)DAGQjpbYkg0:sH)$;l0V>%^6<e&uF!' );
define( 'AUTH_SALT',        '^s#_:=JZ+Tq#0rk2{6rgtL@rmk1kK&>^hhw[tEH<-0jrt$/n[nR:+}&&V9MIAsZ1' );
define( 'SECURE_AUTH_SALT', 'APxYqbfY@LzraMhspsIhOX>:Ns(er_y|)5F+)z&h!}ir>UCVXJHwj|1I{D3|eWl=' );
define( 'LOGGED_IN_SALT',   'n!eE+ X=NTo83/[HP3Kg7)&wYj@P5flujs>:5OjBgLeoxz,%F`/on|eqJm4zp=C1' );
define( 'NONCE_SALT',       'p)X{97nt(CB5qv<_YYIdKK&I^:9+|8H|trDo0toTbm%AEYSBQVLr?oIqm6s! kz-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sample';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
