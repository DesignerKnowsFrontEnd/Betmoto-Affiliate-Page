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
define('AUTH_KEY',         '6u/Nnopdl67HnC93dF+SPeRBzCQvpP3A61Z7A2kM7dPmFzpkDdA8BArPmwp4MX6virTRPw9+gTif/LfhDKqyyg==');
define('SECURE_AUTH_KEY',  'mXG396dYf0x1Mf/yFvfWUWUK7Jrsl+tmuV+JlI2cV9q6H+OR0NwqegOpWRNT6b23YHCfz+lixvbeffZOeb2sSg==');
define('LOGGED_IN_KEY',    'wTByVRigIF9iNzL8FgBWTKw+SN68iPID6aeHtLZnZBziNhZN/tiwtNyeV6KIUzB5H+EUXftwVUB/j7JEj1kgdw==');
define('NONCE_KEY',        'W1ZghIPLC2XS1NBrciJa4Z0A8fypZKmciMCAa4TyVBAztYEJDRfWQqm3fYebS2MXtygp7+RWH3UB7HAEDfI4fg==');
define('AUTH_SALT',        'weVzvVHR1LMyWLg4VX3CJTil1XB5JFxndBnidyK94rIlQt5ZO9HT9KjntGqmiObhQcvr4vVW01v4jK/XN3rTmg==');
define('SECURE_AUTH_SALT', 'kMYI7/UedEDod6mbufaYvtANODEqaTE5u0IhiukGB5SpZq/NSgtlPBQ5wj/j3DJDWPPRy6Wlw4iu/PFfnLoTiQ==');
define('LOGGED_IN_SALT',   'WgTYg1GdMnZFBJG+UePQtW2adlh736AloXtw6TjWW9SflG38Ce3TKKhzd+lHUq+YYF/bbzfMEHkNS0fK2OmKtw==');
define('NONCE_SALT',       '+rjP2TCul0D7bo9z5c7bolWx7+nS1SrRz+bqngpzc8yRhhnfrMKrkLzrNdLFe+h7cWgULQI4dEHU7uzBnJ5AxQ==');

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
