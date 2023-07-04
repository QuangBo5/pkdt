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
define( 'DB_NAME', 'pkdt' );

/** Database username */
define( 'DB_USER', 'pkdt' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'rD#d&N#HQVC+6%Oi=)o$hbW4?|I_xCWEdQ*T6Vn.O`s&V8PBeb_m:n+]Is;Rr<T]' );
define( 'SECURE_AUTH_KEY',  '5w#`=O8YScnoTsYiD3LzO}MGvgMX&:.97yp]IBBOF8+JM(;*e_y*ydm(jy;zUbQ{' );
define( 'LOGGED_IN_KEY',    '/Z+Bd^44VkW@gAvrK~*?lA,?H6.]U8}4Obo7BKckPs94Do@[UsotTzHy{K%h-<8`' );
define( 'NONCE_KEY',        'gO!:9`,W |XJGL:pTg~BJ}T*lRUqu?Mm.!E5}3vX|RiH8O;`K(uZwT[r<w.*)e&]' );
define( 'AUTH_SALT',        '7rP/ &l2y>51%^EybUMU;9bIJ`0|pVK4KKP<A}/L#Z)oLfTY`E:,-bl<{(SQ5Ys,' );
define( 'SECURE_AUTH_SALT', 'LiACeVZ-w=K_V;+#I]Knw:??w {CUZXbA_K![xFXF42+^9o?!py#;;GQ6sKXnocY' );
define( 'LOGGED_IN_SALT',   'U<V*W:6@;(rgU;f0+LvR^KYH89<!WM_c1WfD|;/dlmBRT(oo<^P|Bfyda&~#8)E+' );
define( 'NONCE_SALT',       'U@$Oq{~?}ITFOgNQv!1)A|7UiVBmmr_cA/]/^<z^DY9boHNWhXX+@5z=UDrMn;A7' );

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
