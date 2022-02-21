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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custompayment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7Y1I*S4`~z]h{bELoWGm8w;6(0YG|CN@U,_F6*AC[cb2>~tLRrzD9e?!(R$`1;Ya' );
define( 'SECURE_AUTH_KEY',  '4$}4dby`cq6p#*apy+VMDMg1>YV29Da3pWi{M$hjmdk.=MpW lzHn[l=toe2@ #5' );
define( 'LOGGED_IN_KEY',    '*]k5rpiK{DmnOHNv`(abi$rd[!*85vC+e7T++/vNvVlQ`B7@>j@&+W@g?akN*[0&' );
define( 'NONCE_KEY',        'O1*k]iq-`;I%yDSO Cw$VUiSg2=#lEn$Vt.rpRnCy9rDbXz$k:C5 <QI.Ei7xIX9' );
define( 'AUTH_SALT',        'g/dFO&6J)ePz^=jdXt@+njrLOi.kH~OP ?, +>zm.(#:5saEoP(/SS>70:cxOvhL' );
define( 'SECURE_AUTH_SALT', '/F_[h;)]gTSf3GbcX a1fO3thgPiLQ4!Pr6#:)g:PTU}R2ftd+QcvB9v#2P(?X?b' );
define( 'LOGGED_IN_SALT',   'V*Y`Z, qFrMcwGoQv{OYo>V#7HGBa/Qdl:[qQT!DWTNtW~?>yC#x~0~5Lb)x,U$(' );
define( 'NONCE_SALT',       '-WsfWq6<i.KR5Z{bGzJSd3NbOR<)S=) oXlkhkU3<#.FXFKW<>IH}.egf-{W-L|N' );

/**#@-*/

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
