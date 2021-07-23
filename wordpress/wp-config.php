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
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         'xcgEH:P!*`1l+_w&zbkn|h/A4te+~)g}6~i!5uR|M[jb<VmX9))M@%yx5Ac@l2%1' );
define( 'SECURE_AUTH_KEY',  'NW.H}CUo[VUbiq:Vqsvnu3H1KNy&hJV4S}K#40{}fE[qw6RUEtBXk[/B3z$SKIZk' );
define( 'LOGGED_IN_KEY',    ',H@Rm0D/A`Hp!9L#lWp)?=lqt998VDq  Bx>+[0YhNAv?`IM?Geh_5{sW?k]O3L%' );
define( 'NONCE_KEY',        'dTM+-8f*nte^dR3E J@&dTL2CN$~W|5a|f?B/,`:x|Z#rOS~Uh#c:Cs7<*[@W+gm' );
define( 'AUTH_SALT',        'GXoXj<=|Y.1`(%b);9rVKaQJCiV6Pd@kx0[g5D:<UNX%a_doV=pR_w`,L+%^IvP@' );
define( 'SECURE_AUTH_SALT', 'cWG=MWe!0FJSIGITT:0>ojHh,sZQ=~%w4J,yLA}J/0y!}+E}J*a>?}t:z:Y|2b~6' );
define( 'LOGGED_IN_SALT',   'PDR(D SdQfe2-{sBP@p;bD?HOb;37!6YJ>oV-YJjv]CJtp]m0M*P_3o78f4Sm:)i' );
define( 'NONCE_SALT',       '.qf@cYU7kv>Vkjhhn9r#>b b{gsGtO!onvePyN:iKYx+`y `;db3{PiBCqD#H[S~' );

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
