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
define('DB_NAME', 'wieczoryuwielbienia');

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
define('AUTH_KEY',         ':hXUI&cesge-! ,?}Qih(}4;z-VY*6<{>NHlNE5>u+aFv@(Qio?J`_gn-HUi< B@');
define('SECURE_AUTH_KEY',  'lu: 7gGr%[}-e@&KJDd5kO+b64-GSS*293hXC8qy|0*D}fG}coGl5&/@^,zLOwDo');
define('LOGGED_IN_KEY',    'uV_Ap_&?K%TtCwEzIRMjj3c>5qCrNkTL0x):+W-o0 1_bWhk_j)mU?E{=ZdMD .V');
define('NONCE_KEY',        '`H/@EU=rx+SIY3z/NV{*Mvg@Db%KJwt R0]0c97/%g4I-E?koeP|G7*8{N`bL)y}');
define('AUTH_SALT',        'gVWGK)xN)XXNC@!>ia(|_Dp5wN/wZF1<5v_6DBrkGc CdHWf>0]^v,!K=*GHUV=W');
define('SECURE_AUTH_SALT', '}~G=MKgRH!D;{dp<@t=)en[Eq`=WTj)Zri|cq[}~Aa(i~~/sW6@$BsJa4{aCAI5w');
define('LOGGED_IN_SALT',   'pHbm)]N>}[EC+4@5<!f9>$D64FxjvT_Y;Wqz&4[uduS U,)e?|uE;q6I/2El0R^c');
define('NONCE_SALT',       'kj)Ib|$dm8%hcCUVl(hn#8N_I(I>]^/y8Yd${g+{^hxRn[z:D{)Q4Q4({=NdeLPo');

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
