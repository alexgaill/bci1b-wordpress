<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_bci_dev' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8889' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '2bgbq=zqPd([37jOE0,-wcuFwLfp|J?;ih+c1M0^<BLoD|K;4SVh:7[g/ro{!>6I' );
define( 'SECURE_AUTH_KEY',  'GD#5%_zk.FQ:R?XH=gpU~6 LOw3^O8[(6sX43fyrM8I+}|I&_9Ut5p3p0c8(=xG@' );
define( 'LOGGED_IN_KEY',    'WU_oLG<V*$g])|17kHMR5sSR4PP4]*%aA~q=lZ][Xs)#f1YLWsPbs3%ljvoL::>,' );
define( 'NONCE_KEY',        'DrZ&sZ[E9E+#_fvI+UHef${pahc9ErJ9uhKko1~zy<xj@/jp:)]pop~A8~U?UI%f' );
define( 'AUTH_SALT',        'lW-eE}<&STK<}r9le?HCU96ZoE8{>]?[pE:}Drt7tj%|t9T<x]O]E>DWS5]bE8Os' );
define( 'SECURE_AUTH_SALT', '-%$|VDP;9h)2;OjZdVdS|Uo9<~Yx$2C?%VyX33VS6r<I%Q<3H]koog;*D$yojl%Z' );
define( 'LOGGED_IN_SALT',   'qyQ *lLZj&=]NR=K3j ?+SG03lU0C7ZjmIZf#|0W}I1s#fI@UjsNtMyII}<Tsw-1' );
define( 'NONCE_SALT',       '>,`%[F5^~K you{wuXKcEMPm?=0[*cPO3j3JEj7Ipe^K6s3ivE_2rzM1vBN:U^Kl' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
