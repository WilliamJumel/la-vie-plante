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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'hy)n4M^LG/c`k6JO}<$,CC09MC<paQ.h( 4MDsL3!q`JY.DfbG~K9mS*09,k<Ly|' );
define( 'SECURE_AUTH_KEY',   'VgFQA}yR<RHonjl&mmk{VsJXgs>v?4)zrObokr}Qr,6^(_t,)bM!-RBhZjR=5]fo' );
define( 'LOGGED_IN_KEY',     'L.^thUF{eDXmt4Iq|iI8;pUcTkTBd<$Y?I^]H)R0B&(70K.B#yUeO(QOi(,z+joB' );
define( 'NONCE_KEY',         '3C>cIv.B~QW%P{Rwz=zU2,y8v`ZIH4T3HgPn^.JX_dV>3a%=,x|`r0KuC|Rrr6%B' );
define( 'AUTH_SALT',         'e+BuwJi6)5a]`lPvyx]o$X~mN,yh}`CMKJ5}FdA<xvvy{FR`V2[GDF/_Z*2#MweB' );
define( 'SECURE_AUTH_SALT',  'znzbyJLqDj:o0nP8OD4{mE#~>qr#qC@$E$l(5VG9X3B2eq99jP39gS ]N>D}R@1_' );
define( 'LOGGED_IN_SALT',    'CU*L@+KJZvaM3dFe$yV3rvH+|Hl$|${P/oZy9m:&mk`d!$qkRk@GBpB_TK~Nsx`G' );
define( 'NONCE_SALT',        'o6?s[/5@Zk/??*a;tP./p*v#Al`x.NQpH`q>b5HIA_Z0}W2uz9NvN-@dO#X&m8Gt' );
define( 'WP_CACHE_KEY_SALT', 'Rtk7J!S<::dXu{Pqtg_]l0_[YgN6~oG8HNKkM|!??}5FTqxXS=jFDzMY|[z1x/u0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
