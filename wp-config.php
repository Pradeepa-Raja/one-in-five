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
define('DB_NAME', 'devpredi_wp216');

/** MySQL database username */
define('DB_USER', 'devpredi_wp216');

/** MySQL database password */
define('DB_PASSWORD', '4s!(0SGp2s');

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
define('AUTH_KEY',         'k2vk7gtlchnwuvhygvypwkjksedidptzbm65busxfj8jfifij7wa1ijfzxqyahvd');
define('SECURE_AUTH_KEY',  '3dhr9owwtifpnahc6ci7t9iyet2xzzs8n6jyaejnziqd7j6ulgnifljfdcd0hikw');
define('LOGGED_IN_KEY',    'k14hv7zqaxmratu9nwbnrwuk8hj7noybrrx2ywqraez1akdsiklgu822rmxkgyvi');
define('NONCE_KEY',        '1bsrira3qmjblpgdaxwhxsr9j7ubidnuis0dimh6ffimtdgpchqh9rfegfi9mkug');
define('AUTH_SALT',        'obpqavegq3ee3qemenpbxpqwynexoecug796vwpmo3dirsf0wnbcfrc09jgqiybe');
define('SECURE_AUTH_SALT', 'ykfz5ktht0q4cbigrl0qkzw83bsthh15ff3wehbgeb75jdx8z2sa8ywamtbjlbgc');
define('LOGGED_IN_SALT',   'tcsksjjz8rosbfczjmqkgdnq9pdwdjxbyyr71whj7wt9gu8lqdcs4eqn7wr907wq');
define('NONCE_SALT',       'xa2fbnyxbqhxwxdynhwrjkd2u5j3gvzmreaor5ojlgbatyrcyi9fgxcogyzm3iug');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpqg_';

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
