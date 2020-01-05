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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         '|p}0NIYAi{XET$pcYT=;cdS0=!WX(R52(@gwDT!sM3I=VPqrNU{q9Cn:w1ldQT{0' );
define( 'SECURE_AUTH_KEY',  '9vaLtW7=5kHx`%[L<gH>_n/oMwDg_/9=?t3Tg!@W.W~h%Os/`*f*7&5m#LGS.k(0' );
define( 'LOGGED_IN_KEY',    'Hi{<ME8aq2,kh9:P:7^#_qrGwji73iQ0C~n6DP4B,4J/y<N3_<hnd#})*tml@X%w' );
define( 'NONCE_KEY',        '^J#z*B-o,-QJ/_59d$PWCkAlMC6W{a|Cb6!2Jh#4tq+{`xjusGp&aTdSP/}YbGmL' );
define( 'AUTH_SALT',        'Z&}v/bb&6Zhc~ W:QY0FF0=dyxKOO#7LjoV+ga)[ZRP{xzr]L39o:m[siwm$m+c!' );
define( 'SECURE_AUTH_SALT', '{tC<w<X*WctBOW{ym}<Q~94r`$;&OF:nQ)tZgBUX=,YXh`)bs-MVBRc;Ff}|KHBW' );
define( 'LOGGED_IN_SALT',   'P3v ):Aj+ ew_$,{ ZLHdmmAD$%=4O|Mz3?Y4`H_.[qRHabRG4~vzSbM_~cLMyN~' );
define( 'NONCE_SALT',       'QW#YXtu6X5}@r#,G+]i(Ccgt)Vb)e5:9dYi/iI$t,>:vuqBT=DF(L7._y#LXE<up' );

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
