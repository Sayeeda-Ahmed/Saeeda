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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saeeda' );

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
define( 'AUTH_KEY',         'f9:o}M{CMv&^Ss(-^RbZ=gWQde E_[}/qOmnq2{iojPjlLh:t[vl?xs].}c/qDE0' );
define( 'SECURE_AUTH_KEY',  '3IRDNrf%8[3{lX/>)[c:%fgFHdI=[|lB#cV6v@v<xX*byfPr+i3,m[6L(-W(&;wV' );
define( 'LOGGED_IN_KEY',    'saxT11wR@$XYzk-bqI#zYEkM>H74>vKB}=grr:c+|h)Xp?ATd3)1ock/+]K#x=Da' );
define( 'NONCE_KEY',        '{Q0jb*e+tTgYe)Or6SD9-Whb5i2@ W<s3?W70m%?pVw$TLJe0Z,!$g5@4U1_s(v^' );
define( 'AUTH_SALT',        '+i]aU+gAwg$bd,X0R.E%Ud-Hp^f(JN<A>kE1$XTfZRpcT!5d169@Y:YYn!?.LNaG' );
define( 'SECURE_AUTH_SALT', 'ota:g=3D)E6/Y#Fu<+F]dt$eq5xDC.@!lf4h;$sgDM7WG *aC4HU`nt4`@>5@J?2' );
define( 'LOGGED_IN_SALT',   'fCLJkx[Tl#Q1a&0dlP:Peqj*6s/B^Q:]ff{qpddaGGp<wc0hsB$C[,z^<Cm&|LQd' );
define( 'NONCE_SALT',       'n?7qW8PS[4iCf/%ZD1ex&IcmoB+Qk]I0gylC. H@?,uzae_Kr&cTZkmxgj62gE0%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
