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
define('DB_NAME', 'emilyl6_wo336');

/** MySQL database username */
define('DB_USER', 'emilyl6_wo336');

/** MySQL database password */
define('DB_PASSWORD', 'Pj98T))tS3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'cego0yur00cnnwebvocjhanu2hiap8gxsu62fvqaz5nlohtf2d82bxns1ipy5rce');
define('SECURE_AUTH_KEY',  'htw2buxin6wrfn6ctciuagnolhktattsk6qhpey1ontgun0cbv7rpyeimigkydic');
define('LOGGED_IN_KEY',    'hg4onwk3mryi4qycwoadelj0ojcdfyup8jduk9fr85q8jg7l5cjekyf60ogr3f1x');
define('NONCE_KEY',        'uiuivgnoxgwfilelvgj929xbeghzonm8klpplsulhtv5hohufvblzt3ixzzk1vat');
define('AUTH_SALT',        'hl65y1lrzanfddwjx5nhdvnzqmbmg2bbnfuy0firpm3oai4s4odmv9crrnc9daw4');
define('SECURE_AUTH_SALT', '64capttjphuvkdx4tgpq6vygipwjkgsoszslfwyfwnykoumskukprbxg5pmuu8ow');
define('LOGGED_IN_SALT',   'sxl1ckhzcyr7gkz3aipmjee45dwriupcgexnduty2me3gjhkrset3fi9qvx03wlk');
define('NONCE_SALT',       'nupetc2npleuihv9zyutj1ecmf3u0k5b44pw67o1um7vs9lzlmndauu98cn6v0yu');

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
