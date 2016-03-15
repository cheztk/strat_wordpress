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
define('DB_NAME', 'dawn_wordpress');

/** MySQL database username */
define('DB_USER', 'dawnman');

/** MySQL database password */
define('DB_PASSWORD', 'vaXzVBNYrfAySu24');

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
define('AUTH_KEY',         'fV+_W{s@b5<Vav1<u+%RvBT54%P#8!+FPL8RC5_aMWs{v3/PI)[NIrdX4XWz#~nQ');
define('SECURE_AUTH_KEY',  '$WhsTE=Q_E |&oR*3*O7hXpw?H+@$uz5N{*j4{Ui?A2eaNGUj|x%qKk.]wWr[PPC');
define('LOGGED_IN_KEY',    'rf4hgsgTtS!kA=M?0NH|3`uYRwJ5J!fTeM!WL2_rnBdi%T|F3Bxd=9`:q]!+cB<y');
define('NONCE_KEY',        'T0hw@+xV+3Sc%:m7fhwhYMRxgnHI%cOC(KJ?1|G^S-4@^^AlUSG~7q8mxqqLs-Uc');
define('AUTH_SALT',        ',{J9c*{?=AEKPC/|M7]^gw|tz?DkYs`XK$e=zePs Xrtq_&BwTQfT{-J-$xyW[1-');
define('SECURE_AUTH_SALT', '3SQkQ^IsFo6G-[CJM`CPgV)@`UG }E=Rn%cVl_+F~42B}<.r?Dr{]54=y>/n#vVO');
define('LOGGED_IN_SALT',   'H~VOfXIp(MmBFHw6Wb05`<T-*0$H>+*!2%!/8CT[-b0Ez|Q+LXt-K/|Fl+y@/*)w');
define('NONCE_SALT',       'wN=3maILhK>bwL]OE?-9K-cr&gc3s`E{-@bM:|v;W0Xi_{@=~;Ks_Tt5SUKM~>]X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mmdev_';

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
