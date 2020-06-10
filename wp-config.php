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
define( 'DB_NAME', 'SwatiPapers_db' );

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
define( 'AUTH_KEY',         '=R3i],[ 2|K1nARm1wx4SffH{V~i<&{q!GMIQ#D)b(S?K]_NK/z=#%20jwmz:C4&' );
define( 'SECURE_AUTH_KEY',  'er4&O84hL^XGr0kDPoUoS.&5StpVlD~d5[Vv%zoExjxzUTy)IK4LQ`h&@3uYbW4v' );
define( 'LOGGED_IN_KEY',    'OQR_zN5kb9=1$qRmYb]gn/bKQfBaYfo^%N|OMn +oIl3]R4wq#YT^A)iq,1^R42M' );
define( 'NONCE_KEY',        'Xn1wsOLi0[rD0C+?0]~k#b?AZY@(^>6{x1Ti <2G%jUyff?zlCFA0.5FFv@AS+sO' );
define( 'AUTH_SALT',        'q#}vR[~1N5pzA2SMrA_EA2(ral|msP[k#vSgV LVoXW?ql~%xP*e=DW7`mH`%zV+' );
define( 'SECURE_AUTH_SALT', ';6v8N*`Lm0G)B76Jf:/Co{hhw:Z5K evvhwBo;m+<Pw;jg6v}t%IlTt;-$EP &BC' );
define( 'LOGGED_IN_SALT',   '(e-Xt 3&JIn#Q!741M<<8)f=-$.,nONK:G@j.=lRj7V#F)8#S;d};}@h]#ty5,Py' );
define( 'NONCE_SALT',       'Fy#Mm1bH#O+g&h#jsLYAH_yI+FJq=*ZF@Q&y-5Yo!lMg5l(#<Fu;uXcc$ wzB@5H' );

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
