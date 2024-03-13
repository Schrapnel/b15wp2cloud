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
define( 'AUTH_KEY',         '=0#HLRrTxJW0kZ.}m`qXh7<zZzb-;o1qmXLp)*RP<Wo_Ob,KX@tztvx_{l4E[%TE' );
define( 'SECURE_AUTH_KEY',  'I0Vt;q[,Ix=5@B)U@bZ$M%6=/%i&n(%BANtD3i{2C$ffyI570tfkpLzr%aCdC++k' );
define( 'LOGGED_IN_KEY',    '/R=-&kL-!rjS)Ams~W]qQ4}PbN,ScN/n;n&2sRj71BOl1#:Uupz. +Btq-vl}.S|' );
define( 'NONCE_KEY',        '-u~QSLpbfSx&B4-l!bBc|o^E7bfSEiy+MwvhSz?(;h Ne,,9*y q_Al/*vDm6~q0' );
define( 'AUTH_SALT',        '[[^Ir@d=ieyR#k|I=-3D6V[k)q8G,dJG~ir^X*yH0ZK63oTt*cHiX`-%VX6]syqh' );
define( 'SECURE_AUTH_SALT', 'AjsK6}5uiO#j&+LCe~:ldVV X&&i+uKZB6},|q>RAHS?Cu*?}XnY[3T9~SYS)0SD' );
define( 'LOGGED_IN_SALT',   '0 T&@}=92u47G.~7dv[eD`{Xjxpt$l0_zRsiq$mK|dp7<VbT;d3o9rY!tv}lnZy^' );
define( 'NONCE_SALT',       'sa7!s;l-@?/!wTtmQ +,R/zS5rE?g{3gm8O|i6-RZ}c +9yZZN6?mwA?}F<tpb<]' );
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
