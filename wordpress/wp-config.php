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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'u<kGTn,$JqpC8g^SO095.o0QI^jSm1+Zc<JGkY]Cl7}JBksKBr_20J{{@r%+%n%q' );
define( 'SECURE_AUTH_KEY',  '(P]qk5eR D_*||K>G|8*U6C$E3eBS]Po c|4N9gfMF9N(Svwm%7ZVm gF:3X)k9*' );
define( 'LOGGED_IN_KEY',    'qf%kezVPZ6n<]=!z~#A/Y+;}d|!`*lH202owa]:cI44x<.Y8RB$AH2}RdhO<*hm~' );
define( 'NONCE_KEY',        'coG#,v3/k|R{[t7nH(mE^8b<LiMSF[1?><6 _gyjU}UP4tw&D3nN$JL@PkC|x)z|' );
define( 'AUTH_SALT',        '[IkKf}#e(xrUB_6&Jw.o928Kf8-~!bq;w 0@]Cd7V2S+5KEwD$I@&vG#3*T4P:)Q' );
define( 'SECURE_AUTH_SALT', 'iZ6Pus4wrMeu|@c[XjWgdXMunP}#97P^aIZH`Mix<*6Hb_u+aXtbDF ND C{i`m7' );
define( 'LOGGED_IN_SALT',   '<J<WK@+e]{%{5}~a&Px[.0z1_9g#)*}b9}Z5O:@:*L>=?U~K~d%cnL4)dV2J1G?z' );
define( 'NONCE_SALT',       '3;84/GUt_Sen!=?1oEjV@x0qmUe3]YYR#bE/`cS_Y[4l(7M$LK]D!z7rq9S^G]q}' );
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
