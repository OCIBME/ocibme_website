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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '5~T1+sWG_0pR2mTY~a2%ZyIo^}@y/6B;nh:jj/W+Il~$nBZR$Q?<]F|p7 |vQ|B:' );
define( 'SECURE_AUTH_KEY',  'eH.=xLr&jx/8Bb/`2A&V}vO{v,-mXjYEcsU3dmro1}i!5 Vp;mEC!wZ!V~rYMwAF' );
define( 'LOGGED_IN_KEY',    'bzQpw O$w=nLGav(JpL7i3MuGDZ&,nyGS*i_E{paK9R)3?[reU[(S[`UX(mM>5-2' );
define( 'NONCE_KEY',        '|Qu3K5|0S#5x,vx$+=,#RZA~> NUwcTV(82);&|w?Z>[Q4@[$pm#^)[||Lu{gFEQ' );
define( 'AUTH_SALT',        'l3D{#+(fwBihxJ]AlH/8r5U0rdH/7bi3YDL&6R$35pG|;dDqOq-on_5tgs~K@y?5' );
define( 'SECURE_AUTH_SALT', '^]afFkc+0bI3fQP2 5nM.I-ii]m#i%Ks8Q32$@p ;2<zYk2VjQUfS0YZbU*z7q<p' );
define( 'LOGGED_IN_SALT',   'hp@p4<{E28n^EAHFj?HFRpW*wUGWHRoT;#qt&q#>*JA t)LmBBF*?a/B<(S]v60v' );
define( 'NONCE_SALT',       '^0}2A4}gXoDP1C|[zV)Q6EG -SoyNb934,]W_D*llp$S)-}@HU@u@,=+CK6Q,7J^' );

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
