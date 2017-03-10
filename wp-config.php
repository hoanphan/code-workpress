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
define('DB_NAME', 'workpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';X~_E;c.3Y9&nrn4c~4L~&Iuh~Y(R4|1&uSsf9lt-PB]cfl9~g~;?Af>zidTB3Ys');
define('SECURE_AUTH_KEY',  'BD;V~3[o>IA+wXH-8cr]=K~rv/B6Vm.m14-bbk![EiE#a6DnjzG$az#<qrb_aK~|');
define('LOGGED_IN_KEY',    'R*DzFrG*#xUERCt?W#/0%Z6eOwFR`wecgo$$u&%S8q5}]}lRC4J)9U6(m8svxTI4');
define('NONCE_KEY',        '4(BS*nsnFZXss4FXA/r8GCJO#)U5,SZP,sgpzSDJ/dtzY1v>@.XR^~).MoZ33g,c');
define('AUTH_SALT',        'f@=6o[:?CxR)lOh[fGZl~L]HC *VU@n(_`{3ZoH/@XY9H2T6?9;df4zZUzNA^YHE');
define('SECURE_AUTH_SALT', '8%!zp|na%t;6Pzs_r0VOE5:#sCi.%2T~bgiy}=md^qIWA=)ZI:!eg5po3=[r22@f');
define('LOGGED_IN_SALT',   'r6_P+]whY{5@QHe({=u?;8Ly[cJ?C4nj_[ujq2RPoQr}F[md9]AO@SNVbNAMea?4');
define('NONCE_SALT',       '2hk0tWM.loW)}I$<Yk(ePK+rMS#R?+1BQs J  x+LHD1$x+@q&5}v:YCq?gcsr8G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
