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
define('DB_NAME', 'seconddb');

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
define('AUTH_KEY',         'XAm#{VLOqqw@f9Q&~Uc8&2bjEcS*/tn&sw}^vvl=5XdulE`c:R2(ccWp}P&6R;}I');
define('SECURE_AUTH_KEY',  '6){F=pYBIjNRMW?n7{UXwx-IB{_Z2lrJ(.nq5kFCQytwg!g[3rn^-q@$F8hs=29M');
define('LOGGED_IN_KEY',    '[.h/j`aMuU!/m|%[P{$I&s8<4&kPE}ww~W{kF26mHH0cu(}w}{*K/+`s50j``;uL');
define('NONCE_KEY',        '_w8~Op_gul_GYvoU0Y5_7eIGgZA!.`-r|?oK&:NN,Nx6n]QXw:BnsP}%BbRSkUi`');
define('AUTH_SALT',        'Xrg5=@Qe88083(G:s2zMu}Vc_{d2qSAnfv^F-r|v/rU7$-.*oQX=Ayi[]cam&h8 ');
define('SECURE_AUTH_SALT', '[TmPbtOC2beN[F4u%eFXAa+Ro9zj9lqc]g5;b|gS_VasWa;VE+w{2L@a&ldwP@^0');
define('LOGGED_IN_SALT',   'tmc&*9Z0<tb88(4!fqx.$CD-uhO`ogwh;kJ@p4>ngGweCL8v%c44D^suBV|.-;Z$');
define('NONCE_SALT',       '%2Rg`EUG7|gyB+P6,)XxNm.y/7#<pzjZ9vV1f;@K<dm4H[<;.tW6rdN:Uc_IdI`v');

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
