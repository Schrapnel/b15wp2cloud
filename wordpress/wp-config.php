<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L9<ci&4/$?q~Pp$vX0|Db+JtS1$`U+HXl-Uw>g)So/T[EtBD=w.{l.fycc3bF?N-' );
define( 'SECURE_AUTH_KEY',  '94t:r<59L3pao7o(lEv/9WRH0ht6EvrA8nEq9JF0ne5[M!AZN>PP#T4FNBvQNB=o' );
define( 'LOGGED_IN_KEY',    'd%u5aE>{P(;dfQ=~I$S?GX8i$YJWf8IeVS0|}(kPdbbw9]jJ~*zb<!Iy+GMKkWzL' );
define( 'NONCE_KEY',        '.-R}l @QgE43}1 8%%7Yf7jm0l,U+XCh8:4sZO$:H>n`gL%E>&cGD964M<b>DJ<!' );
define( 'AUTH_SALT',        '_8l*Rpc*v}HGS|^AeVV[T;sn1Zr#~Gi> x[i6EKQn$zZKh~hlq(>!19R@aJd/Bi3' );
define( 'SECURE_AUTH_SALT', '^.rV8}|4h,M.sC@55RkX.NS.rFB!; Aod4Ui*OlzC@*Ot}z&}syWhaP)0I6x<@4Z' );
define( 'LOGGED_IN_SALT',   'f]PhIfx,Z==~j:/3uPp,Yp[Yh;.auYVGw>{*ib?Tb(Uagt=)G%-a6[1%[R-D#<l}' );
define( 'NONCE_SALT',       '+g<1e gd?M6o:5t;tgljC_vQj#f|6_c0;4Ih5pnzQdAv&iW2kfLg6JDVTtTO,+B8' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
