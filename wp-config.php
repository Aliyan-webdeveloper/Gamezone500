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
define( 'DB_NAME', 'gamezone500' );

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
define( 'AUTH_KEY',         '/m(1pvE7Kc]c5lj%wo[z)kDJz<.~Ou#,ibW>l9]ru)Nx?/+;b33!WX~>5.%j%.TJ' );
define( 'SECURE_AUTH_KEY',  '&>Rz[dm_HZ395-I2PwSYR=0S,.$sGls=BgzD$v~ip+.vDFT:_W6bzVO]jZ)xC{|$' );
define( 'LOGGED_IN_KEY',    'mhV1hiAt4N,6Yo@+=9/h3z*ka[=-o^Gb gk%8v|bm1nyGTd#?p:>ZLMQ,kb`n)7C' );
define( 'NONCE_KEY',        'qv0C3M[-4}{A5SVkw>k]<OcE6+gbZFh=,foHe<t`5~,-(+/T[89rG{*FQ[`3uE,i' );
define( 'AUTH_SALT',        '|U3)ob@$/yi4:lNqNVsH@CgzYQ>40CQ}`&1;VB#HK+rS8v?J=G},r!4ov54PP#< ' );
define( 'SECURE_AUTH_SALT', ':gmZt8*lkosnV9NuP]Df)lAP^OfJDWRt_k;3@~mEeBNe-GBq7[6rY=DO?HE61(oM' );
define( 'LOGGED_IN_SALT',   'BG6`/&0fkB5phlNUN:96Disj6+#:<]~8/9pOm9N|r!mccJ(H]pKR~OpR;XS=c|1&' );
define( 'NONCE_SALT',       'M&3kS.p[~jXSdBH-2tH:lwMu&Chp;eK%Ps:#-g6+3<N)E8gSOgD/}P4DYeLnA8&Q' );

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
