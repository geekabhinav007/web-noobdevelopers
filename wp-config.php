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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '!O+qsrQ]&J6+MamDaxvflYyG[^+{BnFw)#{#8Ml[PaY,;%Oy9[8_{zG=9Pgcvszf' );
define( 'SECURE_AUTH_KEY',  'T-2zI1Q;M`$g]!d6ShI3<D:cw)S&Jm W!J`ji<LH56zO]~Oy:}sZ:;b{RyFZdvM0' );
define( 'LOGGED_IN_KEY',    'Z|o+:)v58,U{2_oU))Re^YXWD}hUU~-1<b%t_N(N&rf!jojh f~LNDaq%a{<$&h<' );
define( 'NONCE_KEY',        'It0]QJ_%KoA$ao7/K{SDk`|MdENeM+:zCFagoVp8Hi6gwb!fDbdxox]0Q{j{aH/Z' );
define( 'AUTH_SALT',        '*K?~eyLiHEWvqDcB}1Fd]_xMW)-?S#kqx{+m!3U~YU~.[Ox LMtg@!]K0tk:#@2?' );
define( 'SECURE_AUTH_SALT', ' %dRl?FH`kVQM:bsuE7H~N}5CYNoo/-rbq]}+uau[6=rr^ztafO0Oo#sK=!UxQi,' );
define( 'LOGGED_IN_SALT',   '`xvvge{e>{*ORF4%W&S?FelGob*b@!d-_.Sw`J{<(=NRPE)6b:Gup1=q_k&%T0Gk' );
define( 'NONCE_SALT',       '>j26*K_1^]*JGEPInNmBu<A>,O |e2LfP*@kKdt{{~7|;]v&*wW5IvR0);swIJ6/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
