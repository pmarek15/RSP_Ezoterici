<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'dostal39' );

/** Database username */
define( 'DB_USER', 'dostal39' );

/** Database password */
define( 'DB_PASSWORD', 'Tis*5221092' );

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
define( 'AUTH_KEY',         ' P:CH_E^kqQu/My[+?cHKUg{i>]*->^00l9Z|v&!Us*E@C-##md-UPQs6IBzuUu6' );
define( 'SECURE_AUTH_KEY',  'X)7xTn#J>z@K`SvVo^fp{35Ure8,he F=,F;j[NU~>wQq4Yvy9y>SyV.*fNuq-*z' );
define( 'LOGGED_IN_KEY',    ':D[_jWk.|Vo^DV5*,(e8s_Z(%h2*s}/.,URR:NT8W:@)DVK&E^YW7nf0`0Pkj9Ps' );
define( 'NONCE_KEY',        'B!<d}>h/9~e1Sp`8U ^HIqSLKw!,0d9j.0IxFPNt=l0h=.JvE2;VeoS+5YFPeFlH' );
define( 'AUTH_SALT',        'off?cXp=z6gA}(iM]:7 OJi.2Dlm~GDad2=:u&Sn9C#D68QN+x|QDxI`Ad>D7Z=y' );
define( 'SECURE_AUTH_SALT', 'X8VUM8^po5Yc?5r]n>Q~Yx.oH51_=nPf74fyf:~6T?PLXqDk9Cs0R|Pa~B/PcQ$J' );
define( 'LOGGED_IN_SALT',   '^1TxYW{0EP}*/p&3Yt1o]G9!HBy3go(#Gx|u~q}QUuk:Qxr[.CY+nDKuXu5sQ^~*' );
define( 'NONCE_SALT',       'aS<x&!qIoL$/fTwk%91a5(Sw`_ZnKPc9u2f g ;8:9*/gJiEzp.1q,wyA5G47=g^' );

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



define('VP_ENVIRONMENT', 'production');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD', 'direct');
