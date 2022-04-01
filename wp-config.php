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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.YwZA9K&IT<xa) Q|^T8Jb?mWP_#wO#WjgX`-5:YdDVlK~KpcF-sH|tW#Eg1lu]b' );
define( 'SECURE_AUTH_KEY',  'U&#lSVS?Mgs:KjMU@&cPX`{iS5n,YJf_Ba}N)PI3zw7TSENI& P$o@g %QOw/&@b' );
define( 'LOGGED_IN_KEY',    ',F)5Tr;c)!^`]QS5lOFul@-ZZRtCFv=uEGFpI#[O:!fgRaI&PuW0&`$yrP2XNx[k' );
define( 'NONCE_KEY',        'Cq{Le|=V/rqu.#;]9&7_qq%@vHrX2G,0sv?}4Plwi{i#I8!#>)%v~5*[`|=UG;h]' );
define( 'AUTH_SALT',        '4!/Nhl`FN8=r_(D)au-#hAsS`O5:c03nhA!N3+jq0Dv**6kj8{nIywLKRaEYGGcO' );
define( 'SECURE_AUTH_SALT', '`gG^d$4AY)cq O+ex.2/ScJ@*-3>C:JS.@)|207zg/%uk^P};AFt_7;D0(qb1dvD' );
define( 'LOGGED_IN_SALT',   '50En}T0EK)7~IHt7G9v+&j]9@kKx[}T2Iq4-nP~=gVSRB(H1f$?{s@n?absi>Sn5' );
define( 'NONCE_SALT',       'CaK*<V .v5!Vr_[Q5l1S!3b$j3T(m~Xx(jjdGRLS`.}|I!W~{*wO&d6$u=v?S//L' );

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
