<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'tik_flak');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'tik_uzer');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Phev6muGhoog');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',V3H+U6B]|Au7|Y@05,y0?bdM>js(~=7EyxOTkpikkB3H#<L@s[,qU*}|+:s=R-G');
define('SECURE_AUTH_KEY',  'PybbixoYVTr9:tc]6nLb=zVwbItX/9|X|.<3NyWWS1D/(P+dnJgO>Xd?Vuw7Xm_-');
define('LOGGED_IN_KEY',    'W7NGc0WwV@`}YjNlmW>hW.m]MDiwP0zx<Y?w-?P;h_(#xN]3C[ /eunv<9ZA2gS1');
define('NONCE_KEY',        'sx9A`K{4G*Gh=N}hF^|OVI45zS5o-iW8W+XzK5#0x*P-Gi)<#fWw&t*~#z#+r^ #');
define('AUTH_SALT',        'B6;H`M#UX,LdB]ibsj/oT+ma$Kh77+5q(c^EP@lkV]NU1J&}=Z|W.Qu?zZ7 K!;4');
define('SECURE_AUTH_SALT', 'T~7 hSe(AHy(-3cs^?hG=bR Q#XF*DR+V&+LG-8K++4Jjy~z4I>& KbFj:(+479u');
define('LOGGED_IN_SALT',   '|S{D=11p+1y&$~3z9dhg%|FoW(N<c5EO4v1oFRrm<+.uo)AeP?@Z(&c/2Fth4Uo@');
define('NONCE_SALT',       'M=[RK~hPos8;+&_Wh>Vof@>nlH{m,+Y@KnZ/qHwp-vU4<91LKDd|I1k>1QJ+_}SJ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
