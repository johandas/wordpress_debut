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
define('DB_NAME', 'labonnebouffe');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',*S6-ajY~mNH2GumpfR%d;ctkEgI16X<pDbS=tVD+tb&{>7fP:-``d>R.Xw.Tl8K');
define('SECURE_AUTH_KEY',  '4@oyr]xL]5S>i$2@rILnUQM<%8v}b)`Y<EXL4O$AV&fOw!q;G0d$e?wO8Tpu25KE');
define('LOGGED_IN_KEY',    '7cvsb]>fH4P{qN{XZ]Pr/{#reYYffNUhI2ochk soz(7-{~kc(hj}OOq*-$]%{/M');
define('NONCE_KEY',        ':}7o@CjRJd[Be0CA~<$gQS-DS0[3Mra-dG+,-5MP^/T; GhOh4.e@Q<J>vxthn~R');
define('AUTH_SALT',        'E(dp7wFwkW@7yj[.8asG5&GfiAA!;N#RMNZ_ZNf%)9gjjiN&rb{)C^fJ%?WoFB@T');
define('SECURE_AUTH_SALT', ' bR{P6vv#I|~~86w>6+(C&]jgY6T`a:CuzN*q3~SR%8A,hPir(-sYnMclrTB<mCU');
define('LOGGED_IN_SALT',   'Q7>5~^p9%f.yE&Y]>`JI[LZc3`wFLGC#]?|=2o 6fizu:92a1I{|.sjK~mUt;XyW');
define('NONCE_SALT',       '3kz8G~# d7Ed%e%,[}dn-hZ~Hkt).vGKL52w+yNFcYf+!z83&L`tYwh[(Elmr1;v');
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