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
define('DB_NAME', 'db631046991');

/** MySQL database username */
define('DB_USER', 'dbo631046991');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         'yb*}I(gOsbU0FJrx{?s[*~*E9;MleW3tUAb:C,O6]eT&Y2rl*z3+t0F(|V1R0}F5');
define('SECURE_AUTH_KEY',  'FGCNivz+F!S)S|&SdB}Y:FCeIXk5#Q-?$r>n{3R&Eeyc,!K`oP.DMncH4$M)mo5-');
define('LOGGED_IN_KEY',    '@4zdaDy0qfcXI<gbWNYaagp@u[,=gRCI^s *~;Ia|Px]=GR32^[Im6:LsDOln`P ');
define('NONCE_KEY',        '<uoz:?5KHf>@K6/p^@#!&TPmQG(Hg{=iP-I/AO>{B}$*4s@>}APnX_`mK05k9A+I');
define('AUTH_SALT',        '~[ec1kN,pO%,1d9zqETLCb( 9_fZVb-it)HN=Uq$pgZ*=gEfh$?!IkiiRqg!co2j');
define('SECURE_AUTH_SALT', 'Fg/x4dAmnJ_g1X:+B`:%P`B9VfM1pJ+]v&WiX{1+p/]c<q:!DulaSZo;XQ%G6+le');
define('LOGGED_IN_SALT',   'ow$ZR<#894B`a4&<I!f]{x?r`0n9Wn<7Hwi5~NFo?q1]u@T}nzUkdDaT1x*R:s9{');
define('NONCE_SALT',       '=-2;|w&aL`7NgH~3>=_c9P72Y##fM*4Sz$l1v/|=oIx{s>]v05#M>A$%Mhn1yU6 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hs_';

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
