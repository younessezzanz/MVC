<?php
/**
* Construit un chemin de fichier avec le séparateur de répertoire approprié.
*/
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

/** Constantes pré-définies */
/** Chemin absolu vers le dossier de Site. */
define('APP_PATH', realpath(dirname(__FILE__)) . DS . '..');
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('TEMPLATES_PATH', APP_PATH . DS . 'templates' . DS . 'components' . DS);
define('CONFIG_PATH', APP_PATH . DS . 'config' . DS);
define('LANGUAGES_PATH', APP_PATH . DS . 'languages' . DS);

define('CSS', '/css/');
define('JS', '/js/');

/**
 * La configuration de base de votre installation.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "config.php" et remplir les
 * valeurs.
 *
 * @package flexycodes
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
defined('DB_DB_NAME')     ? null : define('DB_DB_NAME', 'storedb');

/** Utilisateur de la base de données MySQL. */
defined('DB_USER_NAME')   ? null : define('DB_USER_NAME', 'root');

/** Mot de passe de la base de données MySQL. */
defined('DB_PASSWORD')    ? null : define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
defined('DB_HOST_NAME')   ? null : define('DB_HOST_NAME', 'localhost');

/** Port Number l’hébergement MySQL. */
defined('DB_PORT_NUMBER') ? null : define('DB_PORT_NUMBER', 3306);

/** Connexion driver l’hébergement MySQL. */
defined('DB_CONN_DRIVER') ? null : define('DB_CONN_DRIVER', 1);

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
defined('DB_PORT_NUMBER') ? null : define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
  define('DB_COLLATE', '');

/**
 * Préfixe de base de données pour les tables de votre site.
 */
defined('TABLE_PREFIX') ? null : define('TABLE_PREFIX', 'app_');
/** Default application language
  */
  defined('APP_DEFAULT_LANGUAGE')  ? null : define('APP_DEFAULT_LANGUAGE', 'en');
  
// Session configuration
defined('SESSION_NAME')          ? null : define ('SESSION_NAME', '_ESTORE_SESSION');
defined('SESSION_LIFE_TIME')     ? null : define ('SESSION_LIFE_TIME', 0);
defined('SESSION_SAVE_PATH')     ? null : define ('SESSION_SAVE_PATH', APP_PATH . DS . '..' . DS . 'sessions');

// SALT
defined('APP_SALT')     ? null : define ('APP_SALT', '$2a$07$yeNCSNwRpYopOhv0TrrReP$');

// Check for access privileges
defined('CHECK_FOR_PRIVILEGES') ? null : define('CHECK_FOR_PRIVILEGES', 1);