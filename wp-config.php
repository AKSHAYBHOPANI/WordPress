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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'P.8|0S;^f G:_ m@v*%|@[9[Ee)n$TwIC)v;Lw;O)3~}jyUoB&;?TE_Vu*vGzB4Y' );
define( 'SECURE_AUTH_KEY',  'PPw>RTX7YDBd6:=tGja_&/D.:&24s$o;UuV}Xt<=w`X/n2k@ ~W/[KC3#M{3k*nw' );
define( 'LOGGED_IN_KEY',    'rOlK2_1;xwn19N~:IoqvEYABJO` Z]? *4 d9YT<)b~#+92xgw>&0<qi@m3(NY.T' );
define( 'NONCE_KEY',        'so$C,7DRuSsG{7E?!j%0d|dDE{SVf6go5!J7aquA,IA!lNtP]:d7&<: |c/Ee.v[' );
define( 'AUTH_SALT',        't+.E|[3ISWlYG]_~sx&wuOFwX$X{ao.0Y7N_>Zj(dp ?sm%P3tEf`d?d5hT=nE)u' );
define( 'SECURE_AUTH_SALT', 'R6!ljkOIAD6&=|WOYH YrXw)F,t/GH$BuZ dHWyN@Fd.r{1u:j:`6PHP)/IS!eGf' );
define( 'LOGGED_IN_SALT',   '~QY78yXcSG48f[*B>$BHqY0!F]cm0`Q5E H(jV7Os:ER{1)~vEK}7$z{=)^.ud9n' );
define( 'NONCE_SALT',       '~NY{OKoidZ<@~1qYUlK1V${t`2(/EcsA9S#C5VYv)G5?V[N20T+eV3**ks{~,*;@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
define('CONCATENATE_SCRIPTS', false); 
require_once( ABSPATH . 'wp-settings.php' );
