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
define( 'DB_NAME', 'acloudguru' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S28uccess' );

/** MySQL hostname */
define( 'DB_HOST', 'acloudguru.cnjayqdtfz2g.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '/z|t^r|q=Hv-=Ek1(uHN%9^%=Ybwzr<6e%r}Ro]bK:40Vr;XGfr*{j/Dw&N7m3vc' );
define( 'SECURE_AUTH_KEY',  '.v#t(7qcS8gfyS+.Wfc&CcAQ=Cz-y!+!zR&rSF./-=|PhT ?zF(~`lF5cbr+$+{^' );
define( 'LOGGED_IN_KEY',    'fMkoAG[txKcK|nY-~+ vsHBTS|/9w+xDtIBd~6^A1Kqvu9%L~EssD9waw;Ggt#nL' );
define( 'NONCE_KEY',        'd3iyk9]ay+~mBNlhUg`2e{k Q&797YY+=P}-l4b+^?eb{ATcW+|LrDGkZ~m/?KZz' );
define( 'AUTH_SALT',        'M;~w7!:-LIT[FiK_+-f@2/26!@s9JmOBG-AHhMERA+&:]Sx=io>KeSvUG;8RY[s-' );
define( 'SECURE_AUTH_SALT', 'Ijk#}pv?wLAq;nUZ7u#bpscq5rGtq12Jzi*.U@(%qo:K&+Ds`:0%JMvHHk*Sl*6S' );
define( 'LOGGED_IN_SALT',   'h^ss9S2=7^GS+d6n*vJ4BoN+K<:&`|Y<|rcqq+4^F55<4zCv`V@HPxxyVTqWg,V-' );
define( 'NONCE_SALT',       'k*#0kX-lUjv!{|nhNwl8egW%:S#qc/?WHJVZ;rRnZq3{Q0}*m#7+Z-1&W&7tudI=' );

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

























