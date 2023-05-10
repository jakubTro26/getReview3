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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo' );

/** Database username */
define( 'DB_USER', 'woo' );

/** Database password */
define( 'DB_PASSWORD', 'eS1zU4xK4f' );

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
define( 'AUTH_KEY',         'JqUC}vXknn=r#V x l%SqiLk8gI6LnOBkna8pX,{dwCu_alj~Dnj)*j3/DFJu=3D' );
define( 'SECURE_AUTH_KEY',  'YH;/G]:z-)86H#>TD@)y)F^sgQ2J]e!$,}X_>={Xe?KiwX,7gC!i4geNQ@;W/!+M' );
define( 'LOGGED_IN_KEY',    'Hek0|}-~c%5z8d=y/B0RItq_U7[ ,>y9VD_{lqx:#7Wm<Oj4cT%pQ0mv6!xEdM}F' );
define( 'NONCE_KEY',        'd]wem>;(ZHsdE`SL*1/~5wHyhFN ,ST__glaeHGp`ym]5M>qHZi02zjy&xMZ5o3h' );
define( 'AUTH_SALT',        'J?c+I#@H`HzUyC_AleOo&>(LE4TXJ`Y1>d2|W8.Je<O.%jZv<sjxTy(C+:)?Op-k' );
define( 'SECURE_AUTH_SALT', '<4nw!%_!|^E<Ws~|Rbu>lu o[qcg+Ig-d U&CJB<tqChAd@SdHSZL8oPzF{-W{69' );
define( 'LOGGED_IN_SALT',   '`HZC~Q0]mis[9IT[]lmAGK~oI{X}4Y$cG6k>kP?qNIp ,U})tAV)kmn>_r0)uJd}' );
define( 'NONCE_SALT',       'T[7&BF}_Dsti[sPdqYo+&Q5{R9M$?]pUj,v*2@geQ*e})L.bKC_9Cu]7viK7:Sw~' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
