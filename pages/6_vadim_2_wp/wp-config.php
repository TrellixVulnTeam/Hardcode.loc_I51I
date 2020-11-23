<?php
define('WP_HOME', 'http://hardcode.loc/pages/6_vadim_2_wp/');
define('WP_SITEURL', 'http://hardcode.loc/pages/6_vadim_2_wp/');
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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',u`&C:yq-Sj9M93Z9%N@ z,?$CGJjJO!Vgd|t(iPD(-D|P2hXZF9gHH.O;=cHQ*2' );
define( 'SECURE_AUTH_KEY',  'E!Gomu4 !CR:xGn^0uhp>ZOA*(9N&9/_V+ &~[,Sl,%]QZL+4C$Qe6$q<GMw+>gJ' );
define( 'LOGGED_IN_KEY',    '|8S%sZM)9#1M6@W(,J*{Wu5+-P4@`TY(H_=I$&SD!+W`F&Ry}|tH.);hjg#(_:q0' );
define( 'NONCE_KEY',        '1,7h3;@hMYUd^AXicoBU$ si`N`yldZX$6l|t3ca&Hv5%mY%x# a,W6A^aO,![Nt' );
define( 'AUTH_SALT',        'Z;p(jfO4i(HFLWrO)H|ul;uhS~X1$T?b8WHijly;LqYj+Gnp~sNLQaXFa|E`8&hU' );
define( 'SECURE_AUTH_SALT', 'nNaF*>OIovI[J0!=m5AWnclkE{IxP!|{M5!M!<z3dm3(.#$@|K.{?Zj8<:6ouK,J' );
define( 'LOGGED_IN_SALT',   'wsF^5A^T8~TzZ/ICpgV+[7h(]u)S~d/0%}u2/qWoekz0zv9_Z@7uetKLMB]9s{eZ' );
define( 'NONCE_SALT',       'Z=:K$0r+q,WyAU*[~Y>~QiE??J+$QA=@>T>[]ke+}]w;3ucaTISV!KcV}Mc0Hx!b' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
