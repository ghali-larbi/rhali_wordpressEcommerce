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
define( 'DB_NAME', 'ecommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^isghVNHi{Yt3ly}cod7QQ9-c[ozA#.H7=@AUeSkNW3c^:~_Z`B!7wH,__7Ye{.h' );
define( 'SECURE_AUTH_KEY',  'LYu~QP=?%BF)7+;]xB973L})Kny:0?<v$cSbG!O+9}V=P|)V*cQIeAC*SoPK5kaV' );
define( 'LOGGED_IN_KEY',    '}9|e$Y@{#?[MNEWr(j$m`wpQ`8VDBb$zR@ef5VT+[R6K~2[l_-J=d[,/BeTjW8J>' );
define( 'NONCE_KEY',        'aFcZkz>RE8I#883i``9/@j72-uv52T]jF@.&KY<w;H(zJVQk6waa`K$V,)Cd8s;{' );
define( 'AUTH_SALT',        ']yTP,*5;@!n~?!P30;X$g?k[_6Cv0Oxnv%2A:h7)E*m9T1/Ge5R%?B!gPX1ksYXa' );
define( 'SECURE_AUTH_SALT', '7Pf,[SEdl.-7=D>^*wkB%a;NT#5fECFog#OE5g?>..`d=&3&t669zo)38rWXEZ;b' );
define( 'LOGGED_IN_SALT',   'X{)|Tr0/kt&XlwlR Sbb7r$5vHk@nQ1ux?bixtDpeU]8dZ`uoEH@Uya*+JdJ/X%#' );
define( 'NONCE_SALT',       ':s;rk=@%anu0|b`0[SQxK]^4E/zn(c0o|a(g9E8+q-S0VKr6a-vt6mK[*Iy.,Q.E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_eco';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
