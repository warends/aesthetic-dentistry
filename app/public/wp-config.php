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
define( 'AUTH_KEY',          'pEUYw0.y#q|de-drj7wgurnPM(mzjb.d#NE~$@7d37@hx(4O(ZO&2pTu)*j[X67G' );
define( 'SECURE_AUTH_KEY',   'I(^0Pyp<] BUt;p@PnE=%5;x3:q~c)?yCHd*b [~2W} {A2G8IeDIlBO[mv j%>8' );
define( 'LOGGED_IN_KEY',     '${1:E?nenK1t)zIESmLJ~6B6C-ScSVk(8Zs&lI)O=N Kj9oykB+}jq83_4VHuLU6' );
define( 'NONCE_KEY',         '4Ka)hsth=#tc2hY1t.e^sM_n3pl=(0^9ERF9T1s>]?TYa{@nk<KJhxz-i[d7I }O' );
define( 'AUTH_SALT',         ' h1_xnf>];`FJ>*7% l<6bs8xaSBI5ho!:HGu`{7GZ(=K$F_UCr)/ %E:3~*pN<v' );
define( 'SECURE_AUTH_SALT',  'hS|xF:9Q8OkiLGQC(j`8~z}c3~pjk ~=v)Swg#LRva3Zz,ac_cF<0%p)j@2p1[P|' );
define( 'LOGGED_IN_SALT',    '(}D-n/+WIQEM(W2$&G^3Y.8(LnF e_8CC!0N!gC:%w&q.-]CGUX%vtB3l6F{8x[m' );
define( 'NONCE_SALT',        'b-!ETgkX4=$wg%<9EAd Dw wkrC,dx:iGo}!O=Pj1`F^U%%hYk=F=J=LhB}9]F<n' );
define( 'WP_CACHE_KEY_SALT', '@gUW9L:!g0]AID%lA];pU|3=qOC2wGN}KM,;B6<Ib>Ph?JSx$!gE;Nt#6?MWol>}' );


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
