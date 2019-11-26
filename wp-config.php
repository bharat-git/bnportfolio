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
define( 'DB_NAME', 'u587322023_upyh' );

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
define( 'AUTH_KEY',         'E86_LlnW=+:xcPQ~ntUKXc<OM3FZ(&[H[=Y<2FlKTCP/dzm*emHL-XE,W/|{/$(c' );
define( 'SECURE_AUTH_KEY',  'ZEZfvW|*Cy1lrf9H%?wUt?KyLiEzDbkutLlnEw[96kB5MRC`TFSbV2F]R`vz>_ti' );
define( 'LOGGED_IN_KEY',    'M4,<Edam/Wx]<vX1,riL>q.XPz<^+e]q%8jVQ&!`FGFC[^me<zT[Cg8-+PmY7KHU' );
define( 'NONCE_KEY',        '(5bw x-|#R,;F02d= ThvCY?R0cnRJ8|X7xS)Ewbj%sPq3EDMA)M8q_36K}w)#m&' );
define( 'AUTH_SALT',        '4fAUtLUDEvw}R+zk^eH7Wj#JGu.pa?^?#xe<[XG8L,![xP!``IVAM:n%H;9k(JK{' );
define( 'SECURE_AUTH_SALT', '*ra]L65nAw0V0hMs>ys(S9s)&9uHrX$}hXPiEq{_mQH(rUcLSJ(gjY,e%W|&avYk' );
define( 'LOGGED_IN_SALT',   '6zk;F8gVd6{Eq9c~0$iqY4H4;%%MBqOT7S1$v_G1iR8&9|]-v?}ns7Yk9vd!MnS`' );
define( 'NONCE_SALT',       'mPos_3g:HO yj}W=Bs^${#R.4!ma->HfG5ba-!QJ2Vm/`<OHt?rB!7}k]C*OAyXi' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
