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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{jm[-#Jl.JwdR3L/Z!.@#i83d&/NYp!Ns}f4kMjaLU<:*D+#u~b4I_4VG/+)7 Uz' );
define( 'SECURE_AUTH_KEY',  'EU4Y/?AIP|w4hu 0eVFNOTUBKqUWdDo[7uE0KI_Js9Iey,ILFZDrF/DZ|Cp685GC' );
define( 'LOGGED_IN_KEY',    '.Ja=-fg-[iL_abv$lw2tNait)L<O`8hnnaElyQR1,BDJD3a~QtSl@StQe!-Jbjw4' );
define( 'NONCE_KEY',        '4.%/V`G.e64359};GD})ie6]#fLzHtCZNlBe(x8Xh!pMha}i;r^Z`*~zo8o[i%KP' );
define( 'AUTH_SALT',        '(LB93@]`??_K`NkU66XJ-T+49Uo2`y7aNA5y+x nA*.Xd=l1+-5tiQkxR7bbL3V+' );
define( 'SECURE_AUTH_SALT', 'Zob>#L:U$JiN!Fj&4>6#;th150Cq*EEi+wqC+!qEY0|`|&C&F[@02Em 2kf_FU-b' );
define( 'LOGGED_IN_SALT',   'gz8*)P!Z(V-7q8b2]I*=Yt7/R9rw.NlLd>|Mus!oYvelY55]ioA>6l>0NGPOXRT%' );
define( 'NONCE_SALT',       '$vXSlzW5 |[v5j6qMcO_Xb rlP Qmtoe`_;?FGv>iu=!#1Q%JD7%X1cKB4d8O,wm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );