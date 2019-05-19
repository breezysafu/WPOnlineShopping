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
define('DB_NAME', 'WPonlineShopping');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'm_l+V+aJ>&<m(+SgO`:-Q34PjAL&;]^KskU@gMx[CoG_AGBeXhBOF}j(;Pv{)HUe');
define('SECURE_AUTH_KEY',  'Zuc_(9bGJi.<M2XheA)vU9N|R>%LSKT^D;F&|t~dG=Ud#20%+669~:,1E{b6a1@*');
define('LOGGED_IN_KEY',    'D/iD~Mak0t)Rhl@[s`ES<`8rEpI_%c@/`)S>,WjN`9Z|/hv4ABLw_m;eQ~BWF+]k');
define('NONCE_KEY',        '_DL0bu?g{6O&/)q>Cwe|gxKc[$yOQ%/eLI@ OLicK|V,?z^FZ1?T{o<h5G4$[5y}');
define('AUTH_SALT',        '<ZUEam&/&,Y0`Be3+qR94/L3,pOSB~Qs2yQ7yVF(]H:Gnx7w9*F_v48>>Py,Y/s5');
define('SECURE_AUTH_SALT', '[Fc_@L8pfEQ-yAKX:Q^o?lA.BYF(pwUo[F!5$Ug-m!IqvQ^b-{<;;([f0 gnIr:)');
define('LOGGED_IN_SALT',   'Kpd?$BpQR[ko_ cBp~S)cWB*Zn 9;y;O9;P>i+0wnX$E,P8c+bntS<XjOHf (=kO');
define('NONCE_SALT',       '~x`^Bu{}=OY&WfxfeI19yO f~*VyI[p>EghaV_#r`j_IU9}C$YI[ze,,}(a.?<3.');

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
