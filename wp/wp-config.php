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
define('DB_NAME', 'wp_webup');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ccj${(*ViV|G$a`v.HViU*wcl954y5R]U_&@+?Dt+Pv-$B49p^[bSzU$t<6I6_nY');
define('SECURE_AUTH_KEY',  's |O9(L|HhSrq2! ^{uu|-v1^HTs?[3(JyxM/iv01e8^64Z[wGwEn>mx[l*8sP8V');
define('LOGGED_IN_KEY',    'IGVCoS_{s<.{]t/tx^*Ga`>VP8yV{U-ZJLXX>&.,}&1FO}@/4pQ@Z0+NW6x&Q`{3');
define('NONCE_KEY',        '5BNQ~cY]dq3g&=4U`}r0P`@?u!6LzNEHANL8zaO#Q7iK9:+l`|(iQJ8}@g`*F(Px');
define('AUTH_SALT',        'RwXfb6m0#<[.8![sSeg._yaNwRNSVq&yju=Ilqm6(a/_ld9K-S[7Q~m)uC.vNkD@');
define('SECURE_AUTH_SALT', '3n_KbT+;s~IL%,Q0?JyY@ixr;bBEQVlSUg3p*<Cx[B`@.OPss43g:Oj<lta_LNKz');
define('LOGGED_IN_SALT',   ',aR=EnvuA*z/|;?4E=Lt #?2SQM|*)&U>5btu{Me?$5LoQD`67gG5@{GA|A6~ Dp');
define('NONCE_SALT',       'LC4u$*&m&=#I<2Rfl*ElS(c%vL=uuth$cq=.|((EwNa6j( HI9.J3j)27JStvS9!');

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
