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
define( 'DB_NAME', 'Webdeployy' );

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
define( 'AUTH_KEY',         'zGFeh},4TJ? q~@Cp#_[L,!q}XjSr>*%]nyhod&2a{iHamRz%VaP4Mg ~/r1 Fr%' );
define( 'SECURE_AUTH_KEY',  't)~&3%Dug=kE%Q6#[q`|gb14KC5FoN<U; L`;R]Hd013nU^3<~i?Do#IH~:R99-~' );
define( 'LOGGED_IN_KEY',    'B&DDoZv)pTEpR6.6fDm#vf@pAE@;MS:JA#79@q(z<7P!%W$HRmC^9k0Cc=:1b*qw' );
define( 'NONCE_KEY',        '[aX/ro|?*Ln%kb`bQZW;o!]#%XP .r;N+h7w,rbSmJj).zgr=nfIFSXw$lIR~Bn_' );
define( 'AUTH_SALT',        'oQn6Oc|Tv9**__Pe@LQ~G5i!xCL5)3lEk~t68>35oIe}%zK]wT8|Rprzk-Yl/4Cj' );
define( 'SECURE_AUTH_SALT', 'OC~@:12@p7<<Ooz| DN-D#hvbd1Lg[Su_nT<N4Wx@O5]P-r~/L78/ueDuhCCF}4,' );
define( 'LOGGED_IN_SALT',   '?V_z]oAsVsxsXI1OBi:{.3(rWAhAQXC>#Y2( u{$<3xwTPyP_Q%wo[4EZPQ}<Q?K' );
define( 'NONCE_SALT',       'p6B%NYcmQqA~ ij8lx:!2SQULJ>VV4?#qg0D`@v7VB&1LdwiSFL4Fq+iPM.tq2jz' );

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
