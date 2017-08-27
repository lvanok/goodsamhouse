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
define('DB_NAME', 'GoodSamHouse');

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
define('AUTH_KEY',         'uO3_?KlsY&ZpUzmG$#98~,`AD1WB/.s+md*PD|rquFvIX,>ZxE4M@vyW?h3)Bzjm');
define('SECURE_AUTH_KEY',  '_2zf4|>+mNf1)$-PTGJ*,|eBj2$sUDj32]hyYz-0&_xl=r|:iC4$,>os}~3UhV0z');
define('LOGGED_IN_KEY',    '~Cfx)VK:]&E#w@H5j^+)]Jm=BGVn}]tTF.)eKLp[FReq^|A.g3cQNZ T cp)/Gol');
define('NONCE_KEY',        'dCx5uQ-P0*gTU-|~8S4FAD%ko+MwT2OxUIoAb?`?`knY)REL~>rSt2t!5f1f:chY');
define('AUTH_SALT',        '[1<ua8*v!Lc%S:&q%`j$<~QelS[)Qo=^i>6Zj -EtmusnVFWOyF_;<2&TMnh~e8@');
define('SECURE_AUTH_SALT', '&K72=|L8w6mq`yCS41mZI0THY1L{^8x``h!iNGmwL{Gxt!<T/JC>$&F,{[XFA^ks');
define('LOGGED_IN_SALT',   'p}?iZ;e$Dzdj;7)/1;mCi!Ea vYz,V<Po*HJ5f|Kx,=je<5b?id7&YtBSOil?z4M');
define('NONCE_SALT',       'X)Mn)3 gnWb/=c(1{a*#%o2:i={eZ{-+@[Yi$B+Sy$XWJNXM-~Qz?0.x[W%]Dft:');

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
