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
define('DB_NAME', 'refribreak');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'ba;;ZV;YQk7.5T:yZB]3@o<wq```n@w^uR7C]Xnl$Zmvt+4_]dHFbOFhS}-ECtR?');
define('SECURE_AUTH_KEY',  'o,exI5h0C0!zO9vb4%UY*f:k{7nc.u1y2V~JZeId7oIIo>2>`!Jd/?~./u/VP{N~');
define('LOGGED_IN_KEY',    'q1ll9=A#>;YcPj4[qX7a@$-6W;FuBt7pf[] w[r99p2imc|.6*NK,0:zDiioH13m');
define('NONCE_KEY',        'bCkW:V2v%]2eiFs<Cy_Oz#/Z8u95aF$+26h0?61[sK7`srBS,L4|w6&3Hl0?J5;F');
define('AUTH_SALT',        'JH[x7sH?x=CgRjF#yv3DJ#)RpF=MS@o{nO8A8x<}frD~yx{wP/`$4oE|?6_%`UD3');
define('SECURE_AUTH_SALT', 'b43I^JI8wI%l_X07Yvo-z!Rbm+CQwJmBeI!4+&-469uDf}OO%J|uaN -6Jqm}(gL');
define('LOGGED_IN_SALT',   '6alg|Z8-/zv,sWX7-dTm6yF,_JX/jS_#?@weTYm-%=M~OwBj$k0C%h}7}=G6(R4R');
define('NONCE_SALT',       '&_LU8HGxQ}<os`zPzK%vXZ{;xU&|7*hYj=Ukh>4b!EO4:jTX[L6*@CipyQ+jayp,');

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
