<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '436-22_96690' );

/** Имя пользователя базы данных */
define( 'DB_USER', '436-22_96690' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'e695b20c0beaa08aaae9' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e$_>mXQ$+CMGPQ6+|_WHtHaGZ:;vz.PLFG_rE<[5%d*<k71:]0Yc1{R~*uHuP(Nm' );
define( 'SECURE_AUTH_KEY',  '4AO m~_VFh]/=A!XGAsZd~]km(<(@1U2k#W#tZoo` NV?PodE6-CG]N;Ga.(?0}j' );
define( 'LOGGED_IN_KEY',    'ic7 hu|-AhHpL|OE+Y$1P0B(L(]WXdQerg/XH4HP/.9%7kG+=IT6GMKJ*x#.T]C>' );
define( 'NONCE_KEY',        '$!jN7B]LXf4Eqf[#K6bc5[2LXi([ra-LS$P>5.eWp7JM~QvRT+^yTUQ#rLsc;/~]' );
define( 'AUTH_SALT',        'qU0[Jr[>bTw/.hd8UoLK]b`@RF>9{Z+pZcY4sRu_dN.2]aJ<`b},9:xDa1#F}Th<' );
define( 'SECURE_AUTH_SALT', 'H5*mF.A^eu[}Ovy{TGR)  Qk*X{[-Fwf9tU|<SMa?y8h2%4@/_{t*}ry4,XT) W/' );
define( 'LOGGED_IN_SALT',   'H:8:ol$9kuQvXd!)w)eG!CcOUJbO~k8x;]a U>@[o.|LlfPFhk:^KwWN8}$;!lsJ' );
define( 'NONCE_SALT',       '2`g]1w>.m8[<h(>luUHYozCB/.Ec#&j5Ab2GRA<$eqt6&-oZ>ocxOLMF[J p^hUs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'WqOUv_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';