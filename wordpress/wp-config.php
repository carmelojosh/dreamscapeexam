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
define( 'DB_NAME', 'Dscape' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'iHPBM`M*-Z<l[~*S(1(j.T.1<djyV&,INy/n,uKW93l9v`,J]@:2,JYlt^l[&9#L' );
define( 'SECURE_AUTH_KEY',  'Aau `Il_f;f1S6OI9nQ5,zmUCOzNOb0y[pU|@ ?Vq~:ZgLR|b}fz+XeP]X?J*e;C' );
define( 'LOGGED_IN_KEY',    ')ZhqiMOA ;zW;tlG63^@CvNp$Wt&xn7<K&{j!#vjvLUu6QwcI&geEDjYK874(=b:' );
define( 'NONCE_KEY',        '|wosYRxbH[y8D(eCfN@x|*EU]%gb*1>bD+l}!R[>GLcmmJ=D-&xPh0`L4Ht)L@R>' );
define( 'AUTH_SALT',        'L{by7FG(>S()?F>]<;[S/LCK=A~u9sAjOH%XWQ3VaGQD^`iwqDQ*&as@g%ev{PWJ' );
define( 'SECURE_AUTH_SALT', 'sbYco; i ksYW2Jo5yI<|+,?S^?*-=IO+%/6tA zDgFlPTCMDQD|17(l$|xU}aQK' );
define( 'LOGGED_IN_SALT',   'p72:46 @z/74!jk`)<r/n;fbC(#iC`p+>5t(,f@[om;NbY+kOV,S~+vZNBD~6?hi' );
define( 'NONCE_SALT',       'ES!(|Sa?_ZLZM7Cu$:,4_ARDUK?E3Wyj|mVm/3gn7R.eK9G:8(2s?ao/Jml*}#-9' );

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
