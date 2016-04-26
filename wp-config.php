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
define('DB_NAME', 'shinjuku');

/** MySQL database username */
define('DB_USER', 'qba');

/** MySQL database password */
define('DB_PASSWORD', 'Vs6qJTWcJZyAuQzt');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'R7mF+T) 0h|y~ Ds?-?$.-*E/bUrPO5.Z-8&-j+^-cnoZQ*~dZo0Ki^Oq<jufHP:');
 define('SECURE_AUTH_KEY',  'o|gDB,yd!%+fEBv>`k2o]a?);#dtEWIP3m/|t*ie3J?>aC~x`*Ruu%Mskzij[HjO');
 define('LOGGED_IN_KEY',    'Y3S/K-M.By2hfJL<]@h9uW0c0{2T9+`&Ie_~rC]/xwQZfZ +G9|n[5+U(4zn1Lcl');
 define('NONCE_KEY',        'nC;I#+0{h<t1Qjez-Xu0sU6;>D*(xh2J:3eju=;.b.JJtQ@=S].+I#qe!1HooB8-');
 define('AUTH_SALT',        'v^(GApM2y>hvZhr?%FQRR,Dr~Icr;XBGr2k~qzRHVN4H(|lCo`Me<URuO5[_b9Fu');
 define('SECURE_AUTH_SALT', 'e-_+.Jtig/Oxy6vNeYc,`MM/tyH:OQ^yXf)%Z@hnLg+>4#0@};|C{frE{Er1qFe5');
 define('LOGGED_IN_SALT',   '[^I5Nkp[mze$fUMC|b;ooFE.I<nW3RS|+Fl0*!Dd8|5qQk5nDB|uW(U-m6X++I13');
 define('NONCE_SALT',       'Cgtyxn,Pm/,J@$/T9HsUYwJpYRXmazA-.BrNA-`bDPJ>pukl03g;KC*?%IIOQF|U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shinjuku_';

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
