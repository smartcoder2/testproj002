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
define( 'DB_NAME', 'testproj002' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '38p4+*5aXiG8X*ar:ioR.0E~vFL9D#l:( OcKW85xrJ+OQ{ldRl72t)6uR(+ys>^' );
define( 'SECURE_AUTH_KEY',  'UwUq@D@M}O $DgvtqrWJ(SPSZQ#bBvQWM(a4cj)$eme%S[hr8j9xQymccDhH9/,T' );
define( 'LOGGED_IN_KEY',    'Qm0!-+&mfkWotsH* Q^a 2V.JX-b__i0tY!w(kQ6?<r-F ybf,63)Hq=8:5ZE#M#' );
define( 'NONCE_KEY',        '9hK@_p)Q6u7S~4vr53e@)GjC5-lg7rrRW`iv)!ec}JZSSnI];N2G:hM6yS+3aid`' );
define( 'AUTH_SALT',        'jfo]o[aejM,jc;U%~RZ43Ud%>P<4pLxHLSvj+^%8uYiB5%Qw@LG{+YeA<QJ).b=B' );
define( 'SECURE_AUTH_SALT', '@d`B:B0EIf&yeJ%]$n5eOs5aGZd:CvM]b%Q)C`aEXBy3~.VkK$3in+%v]<Xbu8zc' );
define( 'LOGGED_IN_SALT',   'N08$Yi4E6Cb!3=>uO[1AW9F2ly528~fnC:GAy;69g%1D@;T*>t|2DnMJUEVVF?#a' );
define( 'NONCE_SALT',       'NUanVqme]T<{h)G<vJeC %c&]CaSjNsq^3F<9K&aunU%FP2OGf<sjTf|Zx/aOowg' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
