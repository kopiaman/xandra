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
define('DB_NAME', 'dexandra');

/** MySQL database username */
define('DB_USER', 'kopiaman');

/** MySQL database password */
define('DB_PASSWORD', 'gengmalay86');

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
define('AUTH_KEY',         'r=7#gFQ/?FqYz5B^|J)w3i;.yGM*;. @V~;] SQW<}@Jfn8)D_#iR,4w6;Ik?$+v');
define('SECURE_AUTH_KEY',  '7UnoSTqpkKz2mZ4De]<v$*&d&gSNM(-Hf1F`yfCQg9U$j-A#G.=cW41b96f!IrR]');
define('LOGGED_IN_KEY',    'PyT7pQRL,_4`z%E UfDp3Gkk]F^TX|-4!(JFQy]vtm3]=w?iksg6KIp.#:~T@b4M');
define('NONCE_KEY',        '@hE[=78GukXg}(N&&RgH_nzW/dk}dH0|P!C);sNUko,mQ0|@dV?4;pF3<63VNGSw');
define('AUTH_SALT',        'GlB;bcAfDwCwTPiGsIh)`* 7VgCIF!r_IM-AkgsY<EtT F^.gmy!W5gue?*]95dm');
define('SECURE_AUTH_SALT', 'c7k-W,C*WI+e#E/,1HAsvYlzy-_au4QHOXhl$gRR]U-`fLQ~~)&A/u3p)W kpU/6');
define('LOGGED_IN_SALT',   '|p0t1Bc*aX<$v#(b*zj33!A+dQ1xLR@,RwZ+/Qt:,Tc|iiACWK/Z%$?uNSoV{1(l');
define('NONCE_SALT',       '+G*lB)efN<[X+$^5S$r%MIKV#OT=v0zVzKUS8`#j{)N??Xeu<H!BAaqDqJi1&]Cg');

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
