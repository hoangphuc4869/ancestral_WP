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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ancestral' );

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
define( 'AUTH_KEY',         '56+<[.Rd)/$_JpJ)z]Yo+,RW8YOEB ,tv>c?jI@1]7CO(B&jT95XcLfPf[w<f!;1' );
define( 'SECURE_AUTH_KEY',  '0m]J5,eeCO2ZbAKFEc_v1`-_HdjATL$3EqQ@^xH8xhzH8*x}iC:HE$}P(t{kifls' );
define( 'LOGGED_IN_KEY',    'B6rNRADh7}:m8UHE;(@e`a#);c{4/4(QRSc1-!Yq@<^8xk9Y8_$~g^vyl>b K8]S' );
define( 'NONCE_KEY',        'XQc%e}6jUdN~f+46|FI6U`etHU0xO67v9A_}OXPuhCy!OUx*+ +i>?ur, Itp^;P' );
define( 'AUTH_SALT',        'A2Vl~1 ^Pv_eH5(biGpSLKoBrrU=&,TSo4oTj><lI?9GH_F/LytL7mzGjp*D,n9Z' );
define( 'SECURE_AUTH_SALT', '6R=:{-4SDH%o=7w:m9M<^r7D$GcJpAU f{`(HBkX:.v2k;;Vw n:9m^&c|Dsvwg[' );
define( 'LOGGED_IN_SALT',   'CO=A85;j3?)>kdx6iLAElY2D,6[ejH^0I>%kSu.)Rm?As!lwu1_jkPBDJ|H>:<rL' );
define( 'NONCE_SALT',       'n`D5j2gs%k}9`O]y<9/#)nfg>4nFfGLBSqn#k uGKGBAZmr&_<ny< &[VPsP8b*G' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
