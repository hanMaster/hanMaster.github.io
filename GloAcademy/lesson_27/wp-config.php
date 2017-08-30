<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'hanma454_lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'hanma454_adm');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kPlC21f8vp');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SeB_aUgAIIrC(amm*Sk}x3di[4#TC2tFF7m+s(-)u^TwSST/YS@!DK_ `li]N6i!');
define('SECURE_AUTH_KEY',  'x0bvl9v1NGfm=Tk!R2&d#;=>~x`B,~K7kiUs8w[Yt5}AhNE5S;VjP]B-6aP?-`r+');
define('LOGGED_IN_KEY',    'LFsj`WMRG(4grIq}nz7],(Ny~?[E,lBCc)P}9=bsD=`!pKI4O%82!u,8g)EYLK3b');
define('NONCE_KEY',        '<~BWEKLaWJf}z<.H/y5}|?#,+pR1~sPF%19GuO#8YZ1i;(g5)+w^eWFYf(7>y^kT');
define('AUTH_SALT',        'J?l?F%mI^DPrw}/(Iw2Na}i!|_$H*U|23|`=~cd&5{Wl9[<]B?,[47xZO{lNk;}L');
define('SECURE_AUTH_SALT', '(w=&oteh:6:C12{-f@Db.Vq`V()rA{FiY0?R#wq8!hZOx[4-63~c{QV=[&N>2(g&');
define('LOGGED_IN_SALT',   'l9qG<g>G#:6mGHjg#bxTMh#TKjs2ckhDk^?ecVhfBPQnHKIA?f|tn;5,_5 d.5BZ');
define('NONCE_SALT',       '-{Hg Xnr<w-GtFQ@M54#nG9-Hk$(NaB}VY&5a;?nWIO FR18(7h#o}~/B,@?nB0 ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
