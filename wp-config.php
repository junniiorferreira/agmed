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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agmed' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5z1wwPQ)GBS5R)6K WM`7lb*X<^zYqj`euF.7x<<u>Ql;k<[XG=Rj/y)_nw?<7Mf' );
define( 'SECURE_AUTH_KEY',  ';6*hZS5Q>H PB/$C>n&o:<m(M=e.5/^S&k6+E)7CRc(K1MW;B^>V>pOmZAH@}Umv' );
define( 'LOGGED_IN_KEY',    '<mY*PuJn-Tc$)BHY- Z9,uGH#~qs+h7_J`F581!xF{bW@k3e;Sr=]zsVgQPe0jwu' );
define( 'NONCE_KEY',        'Y|<Hz&Q. 6{!_] C`w3f@a#2?VM@/zRufi&5f$M(Om{_r)B$2N;wPM{?VRLwFxj ' );
define( 'AUTH_SALT',        ' 0{ASYW(;92Dznfe%K0 -/M]}.P~s_o-)%=Ct*](B@T),g0_f3`08x9URN?4xH8j' );
define( 'SECURE_AUTH_SALT', 'xxq+DSWsSJvQWzgJFD8>rt!xOUAs;B^|>tY+h8BXGgX+t,-5=OL-IUGMG.?)VhC*' );
define( 'LOGGED_IN_SALT',   '7/lY5${PW>_Zjtzm58hHhU!QTG  .~{q&`7-z*(bD&Jj|u>a+3%efCKI|-U4jO2c' );
define( 'NONCE_SALT',       'ZN;3=Ouk]sC@^ybLw`fv1g8t31p/(cEmn;qs,;FtPp+-3B&)l;a0~zp2XV2zAlrC' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'am_';




define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
