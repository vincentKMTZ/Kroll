<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'carole_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'vincent');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vincent');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AIIx&9lT2[[1&9kEywb3U(EP`r ?-+x^OyM_EoRYcATp#3jQ7vz:Wn%.-z*sH3dp');
define('SECURE_AUTH_KEY',  'lC*1h0TZ%,K3o* !CYHmWwCn0)i9X.LWmXs+}EbNvG7AJ>`no-;Mk,=0{IWOGl h');
define('LOGGED_IN_KEY',    'Y}-cDy}DasS(Si_6zhEe3@1`xBsb#.WDQz3:M&F-;W/~am5C~p-c gx.ebU_szp2');
define('NONCE_KEY',        '?_4]* [HJ {jA>TB[sHyhiv@-Wv{ix*60:ofXl -;-zn0wHl@e7|9mSEl!Y,$=sW');
define('AUTH_SALT',        '{]7ny6qGCG%5q!E#mo6(s$odr_%X|ZIj4)F>s.7j)pGv_O.&mm:0qK*]%4J~+tTw');
define('SECURE_AUTH_SALT', 'N~^K|Q(3xU?k?$.W4X9Ml<x%Pop{ZCeDncsE234A1*Fu[x3aM;o00yU8m,JWnsM!');
define('LOGGED_IN_SALT',   ']%@Hdc`v)zWMA_N p]`9@^voVu`,6?K6?2+ZK$#K[GElt`21Rb#-1jZV(g!_|QH@');
define('NONCE_SALT',       '==Z%Ha[-l!YWCIu- 8:3W[3{KCi6L=+Co%_$X+e$Gh$bI5rkbaqDxwXGP$fYiK~[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');