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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '4KruGa25pUm7yeU2I5kgfcU+VzxwEBj+LuhIq4h8XF2EZCcYQ8KqF65hIPoKJ9FSonzeK0Tdv7mtb43t2zLU+g==');
define('SECURE_AUTH_KEY',  'kOUY58/J6tOhWlmpLVOvmoiQ+qvkbeTKUWmy6rUQpHra4ktEeLg3fttJHYSJp77oPoDeQoI9PGTosPEUHJbiLw==');
define('LOGGED_IN_KEY',    'zZxPmBPnNWUhdi74XPj2tlmz9exAb4FBKfsBp6gERppKtiw+7DbMHpYw9UW1Oj+0NVMFOK4Sr03ZMuQVqlejNA==');
define('NONCE_KEY',        'UNhF/Z8EtgY/9ZLyH1fW/BgijiDkcetsX9uZf9cr2TZ83DqJQNxG1pj8MSdgXh3MPVa8oRGFbWq/ki3KtBZMiA==');
define('AUTH_SALT',        'r5ErUMs3R0eJ3ZTIJZ1J6TVyFg7euMzX20tgEd1d2MxiR6qbT7KohNapxf2vUM2e4gG0eT9iVc8YyO3HmkfXnQ==');
define('SECURE_AUTH_SALT', 'Z+SHSFB5chW7NEnvhofUvA4MlQAmDZ33kOgBPjUsJIHueDBrMRmrEYzKTt1ndtldV3wci+LCTPf285g7rl71kQ==');
define('LOGGED_IN_SALT',   'JEj53i8cVZZFpTvzS8uaX7SlrNGQhLCImznIWKMguER8yaC0lL88439IkIRiZjCLO+Nxxgi00ANupdnBvggDAQ==');
define('NONCE_SALT',       'VegJnbgcDPdIo2CqOL37bW/m4IW6eA0Km/frTY+4mNUd3vNehpnbADFLwa5mCZjvlABO9YAEehkmN+ZrKME6LQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
