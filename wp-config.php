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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '?:c?@Y4x%tY(F$l:!IcRR2>N40=?=*8==$L{O$vJ!Q^G,pkKMG+VsL?/a0 8;f_N' );
define( 'SECURE_AUTH_KEY',   'bM.&^Bc?)4 o7<@nRHdkgH]6muve8eL^vF?y,lR4A#%t <~/o^#mv|.;3~TXuf^i' );
define( 'LOGGED_IN_KEY',     'idDP U|xu^@i0N /@kIY+y$-2m7%`Z}e~{l-).K08N}JX&x[fgag`.ru.9kyM7[5' );
define( 'NONCE_KEY',         '0Xb}rhD:P66`!kei@x@Qd{(muu4Xh]M}lJ:Mm(jik)IcAC5(8%Tz!F&,(>T.+>TY' );
define( 'AUTH_SALT',         '&k4MJ].^42b~rb[P?-g6ru]qcQH|uf6-V<#Q =:Ed6kYON>EY18.8o6u75!<1H1c' );
define( 'SECURE_AUTH_SALT',  'B6n8rMX2vrH6.-c0Tn}G=z0Q$Xg+.}6_&2}q J)/mW^gY(w,r!lc2bDkZeG.huz+' );
define( 'LOGGED_IN_SALT',    '6Uww/m[s0,~{0pvty!D]Nn|z*^Q*lm9Zk6aI8;H{==PPt.#W!TUZlUlRTFUkB8Bk' );
define( 'NONCE_SALT',        '8_TJ/ *+CNwVW73Gf/7k3`e!3Nm+qK@/(j.0J~(|dMyi7I>_pW>ef>m~<<mp@9S^' );
define( 'WP_CACHE_KEY_SALT', '73h!u| %~!#M{XoJd;m+OuO-:B}1AuR?8#oBV=`S<AH%#<}YE5@mVT(r<6VUkTcZ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
