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
define( 'DB_NAME', 'db_login' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i!cy.H&GQPO&EGly,CrMK ]o6T9uzzgWpl@24V(D`z9I&R(}:i3tM?;hC(Toerwi' );
define( 'SECURE_AUTH_KEY',  'Y.P?!&4vjZ0ilo7%!4OpI3sVfQ,/G1z; .EZ$/Y_s{hw(yL79Za6h4[l<Lp}m=M?' );
define( 'LOGGED_IN_KEY',    '`<Co?3wV)GWAe5v4]f:pw3PEbLs_>5?MCbwdB=a`V/9=UoNV)a2$5CDpqkj# Z_%' );
define( 'NONCE_KEY',        '4RqNo1p?`U;UCif$w|2fXL[MyVH%(PWHQKd7j#f4pmcKyhb,[>aeTLABqOIf@ytL' );
define( 'AUTH_SALT',        '>ViaHZkq(tb#2f/Jn/bx&l(KC;H [Cb>3%l7jLl`jSqM070KahWw6Civ[J ETyS_' );
define( 'SECURE_AUTH_SALT', 'vlJrVK|?_5oE}JiD_T^Sc{G!,lsvdDBhf/.H{[6IUa`4q3.UnD0:jn$Gl7d#g&>y' );
define( 'LOGGED_IN_SALT',   'DY1Rl(YbT}.Cb9HR@)B+5;98GMx|j8rx[7Z;|~v@v~GdRb*MamEg;@`wR7{iY:9R' );
define( 'NONCE_SALT',       ';fFZcyg1d_&|0LF8Acg[#5&xPnPWQ(t9}w>!*SU8Rby ]JcX04zS5C=u.xNmeFa@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
