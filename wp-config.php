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
define('DB_NAME', 'wrestling-duniya');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C|a6PM_YbhQ,eCs5A`b(_o9/ga$-o)]SM+U[?@[`@SBc=pf2XBwcp-@MPVO}p;~j');
define('SECURE_AUTH_KEY',  'z4gjg~h1sA>_X;I7{^FeAm7zXcf3K[S$SEwB4Zbk;ld@?QuMz~EvLtmU(U9<<CFk');
define('LOGGED_IN_KEY',    'l+_u^QPrrGajUdivQ80<69c]H2xH58{]%&p;3f+8#e4SK-K0+$]PwcsW5yk`RDV}');
define('NONCE_KEY',        ';4G#4x]E3Ov1i|7B-_hLfR9t,mA{j:V@gU:`JU/A=+?UTVO6d7{b07%z;w<wslVD');
define('AUTH_SALT',        'Nvf)K3!+A.$s L+O{2]p~QZt6VTmN2k-k6!*6:HSq;8 VW{~k6ArEAK}}q{[9j<_');
define('SECURE_AUTH_SALT', '/#lFvq,W;OkWI##at$WHVWX.0>f6]l/y;f^Ej*95=l=!mLTKxn]VgL c1DX)mdkW');
define('LOGGED_IN_SALT',   ',b#wcfX1!WJKzvEak`BK$g&cWi-g[3HjbZ[>L3 3Jg@14kSCOj&=v(s /*o&z)x{');
define('NONCE_SALT',       'r92FMuSqc+4:xuvp_-]YpA?{wM(Q=Y#|YBdw/8YRovXeYm[v`s,%:jTCj!G-8j-)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'prsh_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

