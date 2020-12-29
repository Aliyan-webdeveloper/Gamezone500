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
define( 'DB_NAME', 'db_gamezone' );

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
define( 'AUTH_KEY',         'rUNZaSvSqp>`EWw=qwKLJ*RuG5c:&~zVaBC+g[YdQ[[$*Qx*`)Q*dR*ttVhg^@pC' );
define( 'SECURE_AUTH_KEY',  'kgCnSBGf`xA$PiBkNzCNyAWIAi;%,sR]t1%5]NIP/YB~ P<u%,&/qBAw`+RL:KcI' );
define( 'LOGGED_IN_KEY',    '0]:u}]?=`SosO@O&0neCZt-b:Iu_D6D(c.F0z;w]wp!O>{e3S5+/(7[p0O7S_Q(]' );
define( 'NONCE_KEY',        'Y0|H]e+g3sM5StUr#)I/p?L8,1UTCYeBMeB(4s*130h|H3<g}:B-Bek} O3ahh!-' );
define( 'AUTH_SALT',        '}B=N7x5u=EC(KYtoi`@k~_H 7i/4_7fm?m0=`IB%P?]&fSI~(uS<+Ck2DmfhL9(9' );
define( 'SECURE_AUTH_SALT', 'CM~G{=NB7aq2ji2 -&QSAtb=hl1f307kUL#g+DdVZ1?vl]Z?p)Wyoos!VT]{#tJG' );
define( 'LOGGED_IN_SALT',   '2G=hCM!MYy|TfZn_2^1.JkW{SjtP78W(RfA)}^n&P$z}h@6qc!guL)r7Z)l#t;.9' );
define( 'NONCE_SALT',       'a/dQdioF,;qDGx>xt5/<V`eR=<JZemJU1,(CRbH69JLJ6zmb~H6ci?[y~zSnw;E/' );

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
