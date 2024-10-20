<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Alji123!' );

/** Database hostname */
define( 'DB_HOST', 'database-1.ct6w2w4i4qpo.ap-southeast-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}C}ZiPr%H@2F6=)C6&GJJ?eO;|R~Jb,Q`H_|c2hn3D X0>{gB^#&p3Qok4sF4l-g');
define('SECURE_AUTH_KEY',  'E-EE !:@+0-n@T.VI5-oH4qk#=<YL-1@]Vy18B)ySW&cY#ouMolF@lR=J7> ml[R');
define('LOGGED_IN_KEY',    ',[=#*r(_V(7@||<QYLV}?*C{z`a4wT]BA-fj_r%iOgkCmGi#8b&>`C%dIphE>po)');
define('NONCE_KEY',        'S`H~;`5h> #?[-G|625J881|-$B/^5X44%c[^qkpfy)-+k.s:^nAyDGgL53awEPm');
define('AUTH_SALT',        '8g4kXynp{e#t4Wihn6t]GK}-A4NxZf67k]s%8xd1:pK|O`6|=gO0t2WwP0YPR~bc');
define('SECURE_AUTH_SALT', 'Bw@r.5XN:*Jf].i:#Z_IWQ(ysXR!:|#0}gkh0AK**B OImw%8uQ5zUPmQw[l@-UF');
define('LOGGED_IN_SALT',   'g>6K20f4~dvoS6]<-A}+YnSV|=ZQ>~T>[wjwmGadWo.b:[l:JOd7>ls:!CegtFn_');
define('NONCE_SALT',       'v36h-mBmb4?O~I]fQK>E<C-$lT2=$]B_blkYq+?zPoL|v$*f@wx+I1|{},CM2/{3');
/**#@-*/


//Ini saya Comment sengaja ya mas dan access key sama secret key kosong juga, karna saat git push kena error
//define( 'AS3CF_SETTINGS', serialize( array(
//        'provider' => 'aws',
//        'access-key-id' => '',
//        'secret-access-key' => '',
//) ) );


/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



//ini settingan wordpres untuk connect ke S3 AWS
