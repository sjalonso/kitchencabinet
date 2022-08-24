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
define( 'DB_NAME', 'kitchen_cabine' );

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
define( 'AUTH_KEY',         'dw5ZNCHL+tq2bUhF [JQy@;e1,3d;#vvq/#]Eh500{mu&-2W2]j(9.j9uc&JB`]Q' );
define( 'SECURE_AUTH_KEY',  'kj4]`pT|$5!b09H{YpdYdI?$MHkdhb[k^~{Q[0pwrgDg/3JIeh%q/OQ1<1NuiqU7' );
define( 'LOGGED_IN_KEY',    '5S=3Lo:G?ShXK&_kpI]*xFcJjzHEl.!Oc:C5fES@?}j;Pcf51D9bW@DQ8^q6?Jor' );
define( 'NONCE_KEY',        'ix!.yk]X5aC7?~lH`$$h:?lx]?}1n}n[7&$5Ey1GU% !zKT`K[yeN;}s0DiI(Rsc' );
define( 'AUTH_SALT',        '<ndh{h]p*xWPde!34z^=HfZ{vzK p0g %{%1P-wz<W]>^Bf{ iL|g,nVXQa}[xH|' );
define( 'SECURE_AUTH_SALT', '1AK~)Ii-ho=k z,8Q5!&PxY}+qqp-Tz 5P+ad5(~S7Pq@>n3aeP{dNe@+3QF.^4B' );
define( 'LOGGED_IN_SALT',   'O-jX%eoqi{*9Ug],i3}VDeHbdr*n^D;Fs$ G)XMebc[6Z$U3b7w*^*)W2+0R|ozj' );
define( 'NONCE_SALT',       'lpa4+/`Ukzmz :6nk8KlM@6w $F)5u/R<kC5J4mP{?OiHj3fsi(qZRBeC;[%q2.N' );

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
