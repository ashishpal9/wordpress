<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '<your-password>' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ix_=L#nG`oy}m4T<)rY-_W.r~.3:^bf?0}uj89Zs_TMqvo):OIg r^{2ynxcx fC');
define('SECURE_AUTH_KEY',  '[_)E|e2RHMHP`)ceI%+Ia[1)PRBlz9-+G{.isu:!NjxM}Jt+j++s&cxatMDW_eb:');
define('LOGGED_IN_KEY',    '-7w=US>IhUoX%aK#yXgj7[eMg7.T~X @L@#3WhNw/-T9Q[_/20TV#JRqQ8S,v7A[');
define('NONCE_KEY',        'oqxZq$- +~cn~>t_FFLF=>]QJjzXcx&F?MhW4.zT)/OR)OT0P<vRMY,@-),z<,dT');
define('AUTH_SALT',        'bdXMznMDhWhB5NpF|.h#lWsI[>bG:0CbLo_|+BIJ Go<?t{F4t>Eak<,7d44ZUuF');
define('SECURE_AUTH_SALT', 'phb;]E3r5-0S52`)d>.uyoE2,}@-PQT9TIU969~Ha[y)}Vfm-GE#c]>tv~ k+-$-');
define('LOGGED_IN_SALT',   '3(j/E9%22 E-d@m&KUMAsB0/ZIy4_|A]KRv|;x:df?wdkW50/k}+x9PE|]hskDKV');
define('NONCE_SALT',       '$Ik{~+O9u1`:GvxiGCZxLRhwP!7iQH-$S9DeiN^O}q{n>Bp00Uz.KGN@yja,%Cik');
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
