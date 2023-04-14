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
define('DB_NAME', 'che7235e81');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zEghoYNDA%W%b(^s)cI(qieEJiY#2Vyb*ddQHsjMP)IC!z4Jka!^3vCHwd#bQKuK');
define('SECURE_AUTH_KEY',  'OR&32^epqFU8BKhU73698DmokxYF)8C(MdNdZmFHM!uftntudl&pRRYJlwQ!Qe3M');
define('LOGGED_IN_KEY',    '#BDluTt!WsvW66Joi*ppwcoqJ30u%%8eYX113)ptoQlUfPYesw%(vmejDg)1Z!J2');
define('NONCE_KEY',        'I!DQF^5RqGsyoMfOOlq0%uAz(IWfjdCJeTU!SbEzgBL2l)Ot6t@A%k@J9tWF3Jp^');
define('AUTH_SALT',        'vSdgZTV#Ml@QDyn(x%Cl0vQk^!(MNw51ulF)RrWj2Zbld4dXlMsjMp(pGstbVTJ5');
define('SECURE_AUTH_SALT', 'mI0hLeVY!poj&XDR!wkBnH^L%RHXHvMW^x#xNKXin2ri9qbVh@w04@*Y!Etx48zD');
define('LOGGED_IN_SALT',   'cfTeSfjZ9&9b!@EFSedvdjDYRl!)Qx5ujCsbNw4s&DoimuiwEeTuHuSys98)lBlX');
define('NONCE_SALT',       'ZQ2Ql2dy9pmJi!bc!Xu2WYQAkxIAT4^V37ZaAJdboADXX#6O4jff7iYmh!BUje^2');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
