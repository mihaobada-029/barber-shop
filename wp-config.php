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
define( 'DB_NAME', 'barbershop2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '#Az$/o.Qlz|rl/S9ZJszbGhd{_PFTkl@Sbb<L9H<9#4l=)D[11!mkH{`j&s[5MO6' );
define( 'SECURE_AUTH_KEY',  'J:m,Z4avas73@*)hh#adn#>7H2hLZ>~V8ute<SDk/tFVwP01&irs2e&)[)GhRR){' );
define( 'LOGGED_IN_KEY',    'vPGkGwc6qm^W;eq+bp[rPC~-uqT8L%O6fJ;+p|(c:OwnbbUT(T=c<B1Pu4m>cP N' );
define( 'NONCE_KEY',        'K#$fNBwx:rS>l,,lkAXcNIvSJc;,u-CF7;(:_jO<JD,@5kRw(a_)B9^ wQk,rC){' );
define( 'AUTH_SALT',        ',drLJSG<R,rO!beiCNHiNqV)9/Xxs>@{mrX%1[Y&9ywytqHu[`i;/<`qx[t?:6@<' );
define( 'SECURE_AUTH_SALT', '3jFx7a0TC?`CL `4#7r5jnG2hX>hc@r1oE12Sm.I?fPyje<CGDbOb0Vl&-*|-ba}' );
define( 'LOGGED_IN_SALT',   '7WiTSO~3h/)8H;N>qM792g]:a&7hq bLP2<%i(%]x<Q C_3P]9A?U~OXy;@%%Im.' );
define( 'NONCE_SALT',       'N{YfGBf~mb:q?C26,UD9%fmJyxMi(sp6hsrj4WbsoPFCWdv}3LS)6t6oP22UvP#]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
