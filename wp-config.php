<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '474432_database');

/** MySQL database username */
define('DB_USER', '474432_catty');

/** MySQL database password */
define('DB_PASSWORD', '~Bastard1');

/** MySQL hostname */
define('DB_HOST', 'mysql50-109.wc1.dfw1.stabletransit.com');

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
define('AUTH_KEY',         'J$|;T-qA%3b|c;N$(u0jj1i/3B:qD{.b{utjc_8rZ?qh2[-R|OlJ-^~+3ORrQ405');
define('SECURE_AUTH_KEY',  '_[wg,4O)~rNmcPZdb;?Vy$}HePHQN<E-.VXs&2Eh*9W(L1#9@e+s@U))G-?l :2-');
define('LOGGED_IN_KEY',    'bCigk&t$!q/B(jsxf+w0C2 TYCkg_yAP:Jv?C`HoR;=+lh]3-uiQK:/d`|jD9XgK');
define('NONCE_KEY',        '!I|@;p0-/L1(Q_$>IW=$#+Fm}>BF38P};G^/)0g:|92Lv{rJ/ER-;1nN_q)inGjk');
define('AUTH_SALT',        '6d`_iO.t9mM#EC-Lld)<;y|A&4%8^Y]s2&N`}8T0N|V1MaL+gEWJ*_fh5PolK.@N');
define('SECURE_AUTH_SALT', '_/JJ=O;P7p<?$fq)R<J*pq&kl&J-9<=.L+2:Z6AxVn-5b8L>#ti;3M0x5j4],){n');
define('LOGGED_IN_SALT',   'C%JR1Xt-Q{fZ5dh^8I!^3kOYGkxbYQK3Im-LO dU3mNiE[J(0^BnB?Uxr}]ks?7>');
define('NONCE_SALT',       ',,W&K~6~{ n#Gp+;sX)SVk@Rqy!(<G}kCfVwmpjcG[O-bsVvc7}`_![hN-ipQ?qv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
