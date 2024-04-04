<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '%]j,$LB5V6Zbqn},sD.33,>*w:Q]LTGFP=L_*Zl*zcbQ--iEHneBc7WW8[De)3sE' );
define( 'SECURE_AUTH_KEY',   'yIq&XTCEAAhEYqj Ga^2f#aiVSmkGQnspHd?~YfVDEp:|BXbE J6zr1qLgK*j#Se' );
define( 'LOGGED_IN_KEY',     '*/_c)cM0^41O}54slb$BQQBabae(9B8BDq UO4[w#k[ghTxJ$Jn@=VbGZ[Mj88F:' );
define( 'NONCE_KEY',         'njyS[`9n;~d%9[X*}_HCl^AS8vi$&CKn7<:4O57$7}uXOBXHIdy$j}M>m:7z[$&X' );
define( 'AUTH_SALT',         'E+V*vqbH|Br1)fojGYX6J](C|rA2!YQj0m,`Iro pW7 Yx`kj1h.E;5_Ot{.C-m,' );
define( 'SECURE_AUTH_SALT',  'z=I!h:tt*2G1 ]*,h$74C7*9R7992Gk=3C[N(4M3rR$2IT&vW~!{XU1$Z~P<p->,' );
define( 'LOGGED_IN_SALT',    'YL6=60KQ1`x8;qbH1A,1ywWjU,y{SE<l~rJ?J10/Hi{.F{u`HD^,rUUKdD~m)Ail' );
define( 'NONCE_SALT',        'aHy5n#PMRzyS6H.YkYP!39lTf1&W@`(Q4D4ra)5X#m`(xt*8*#F!MXyELIZPU9Np' );
define( 'WP_CACHE_KEY_SALT', '1)fk2(!s#S& }Z<@3OoJ@9Xsd4N8!w79pMM&)v}c3y4hQr(<C~f:yZe9BLAG2^np' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
