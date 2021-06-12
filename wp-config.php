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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S28uccess' );

/** MySQL hostname */
define( 'DB_HOST', 'simplilearn.cnjayqdtfz2g.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<mez+NQ1@-4I06twN4n ;CH@igX%4GG(v#l@P3ySVfv.M1]3j|hfHhS4*f!DgKPk');
define('SECURE_AUTH_KEY',  '>Q/pl6!hAhO-MX#i;t1zq*;PZ<yaG++eta+3mk^!noep9]J1E }jj)xtx</7E9;1');
define('LOGGED_IN_KEY',    'm6?vQ&J-SGqdh_3wsLk~Z0R#v9>S:O~|AZtIqEz~BpzG#-[`)Gtx{oU5z2<4,}gg');
define('NONCE_KEY',        'f@^z9oO|RG;SW|NBMsP@?W1jl,xbhjxzOg@mF)^@&_D? V58.xDJ8q6_RP!*R6ji');
define('AUTH_SALT',        '|^ ||N2Jk0F{,2V9;@|XrW5#E|]*n*n2QUz,v00PkM^Q~N<;P91;Wtpb*)r*~.]|');
define('SECURE_AUTH_SALT', 'Ji=LqyUXq_%^]Xsy{g!Ng-ePxbE2+,|_^AR@yk:.3-ML{6rfk{i^[{j%Z.- r?XA');
define('LOGGED_IN_SALT',   ']2RuS@-SN*<_H8yf7/oJ:;XG |`<gSP6h(U(~38 =oU{wh%#B|rf9$x4=_T1a9sO');
define('NONCE_SALT',       ';|+) 8S!RoyP8Y,Q#49+sCI@ltm-7|*7G|c(W2J+&]=#Lt4:[:HgN#k6Ot=52jyf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

























