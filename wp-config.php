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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'h`N(>OJwBg.Cv6mk6I`<(cZACLoIt/t[R*?o;8]+ST,Zs]GB[$)PZNP3=I)Zrj/0' );
define( 'SECURE_AUTH_KEY',  'pVSf(vq?UrdemLyciv3u&v*bj|vNZgEr%|~A|/20tsJ0 JDz&OcaxO64XUYq+O W' );
define( 'LOGGED_IN_KEY',    'W%_tPz],9NHMXf]P)g)Gf*|LpeM9$`ww4@U_je*M#bu+?0.q7FW$b`Vx^MXNU#m=' );
define( 'NONCE_KEY',        'e^lK[|.E`S$)~(iVgqYb@q0`!1CV1r`u@9c@80b|~v)Vy&M^GgrI+Cnm}L{nr)7w' );
define( 'AUTH_SALT',        'Fi4S*Va,=YIq^T}TW8fhhp&Am35DFRKl_54KO;u_mdj[3AMX-_>oBO_4C$I!bh=^' );
define( 'SECURE_AUTH_SALT', '+y#!]}V`#^##smVL@=Gy-YCL3/2s^05grh.G;I!g~7O3|jz&lCZ(du62Bw_T(idu' );
define( 'LOGGED_IN_SALT',   'A4JAWj4D eY79[~o;Wl4@N}uW~Oi f(nizjUNJ/kU`g@OIEtAv@5;VLz>vxq(@lI' );
define( 'NONCE_SALT',       'N[2x+jiIF %x&b|Dc,>vjqp.w}w[d!,a?hf_l2v0*>5Vn1X(]8Pv,3FIEIqt*;!i' );

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
