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
define( 'DB_NAME', 'studentportal' );

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
define( 'AUTH_KEY',         'l;zNjGye&G<@dDPC_36*HnGw<:4P`(a:.T`2!ccyx[nl|2S!gG9o,Sb[ScoktURY' );
define( 'SECURE_AUTH_KEY',  ')ztU47T#Q>8^67MT[AM)%;JK,9OM!m37Lc#YXn<fZ9py{a|KfcVf~?nAyRD*_xD;' );
define( 'LOGGED_IN_KEY',    'AL|Ga;%nS.wH4YCXYunBK|zZ3>:Tx4/[EOUzvWZK8tNKD*SeHwNPt5~ :ylprSn>' );
define( 'NONCE_KEY',        'Q.swKbTJIDpMJcN!SBVj$W(R%m;Ol#Y5;,C62TUV0a{GRYEdRp2]<Ph4r%oQxES2' );
define( 'AUTH_SALT',        'X#g0u!/|%6ibRNOK}ov)Bzg~bg327A_3Az7uo;q*gRYfSAR[H!472q-R7T[-B~$%' );
define( 'SECURE_AUTH_SALT', 'CyV:>eC7IG#6Ea8=Yj=88pq/d?:ro&z-tKa*]jk,k%b,;gU=@$9y<jZ-Nb-U6x>2' );
define( 'LOGGED_IN_SALT',   '1WnF}VV*y/;P*SDGN>*8QNw.f0y6Z^COwiwvv7=d{F_2QWIXhMkYsYE3 Ugk.c>n' );
define( 'NONCE_SALT',       '=#jm%CO|IG^Q$/ ]/YQ4cWBBa`O%DGy2p6>@9+Rv?Lrvu;Uf@^R9Aqaimuv9X_Rq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
