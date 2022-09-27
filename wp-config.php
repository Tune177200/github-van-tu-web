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
define( 'DB_NAME', 'webcat' );

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
define( 'AUTH_KEY',         '[RIWRd9o&Bzhe?y<k2bjOX(uuM_68kytl^c/eGpxLoAvf6qzPv&L 6{uMB n-P=$' );
define( 'SECURE_AUTH_KEY',  '_a3H5q;uHt?8~V=!RmtVB2q)d3&j,nNDV~r_HVzCYE<9~z8S-g[a%8m)$6&Z.qSg' );
define( 'LOGGED_IN_KEY',    '{BxS9u31t5v4*ZI=6c])Dc*JuUG7=LYOb_LYC$U-/+Vlj>Qgtw`JD$kt|`;Un~c-' );
define( 'NONCE_KEY',        'fC_+<:>qS?H[1M4Q*BCob5U+UFdCO.k|DArB!#Ao/C%hTU//Y`j=Bs~,>aNTYsHf' );
define( 'AUTH_SALT',        'EC$~{Za+dQEQAv cq2&f8n_Ht?sR]|<5L1:#0BvLAz2l>?[2+fS4NPxEtyot-YlI' );
define( 'SECURE_AUTH_SALT', '+S/^-WLd H.J;*{6+RIO:M{w@~SfB[6|//)94>xbv4~J&)adtRFLJ#AC^g9#Gtbi' );
define( 'LOGGED_IN_SALT',   'fF#:cAolxM;_.Gn3$5<e{vw;-*U)S26EBqii)$[t=xpB`zUBzdP-Y>eHM=07?hle' );
define( 'NONCE_SALT',       '*v692O+`R(h6U[CVn1*`8yX9T|-}`R<[BW7cULp,n9EP|[Q@5]X6q;7bmiU35#kf' );

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
