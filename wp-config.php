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
 * * Настройки MySQL
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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';`b.!8d{8y|=Q/)g_qU[Zgn IrG,TtIp<KU#l#Dql=&4P<b7<N/seGy^hoF4q+3/' );
define( 'SECURE_AUTH_KEY',  'ANuFLo2$xWG_84g2.=lOMXT8|f*Ku*;zu)2%pTXk33XZ0|R;NuEirup_JA_eeUj4' );
define( 'LOGGED_IN_KEY',    'G&6S}SBadb~s&L2BeA#Jcop:-(&s7p*bESVd. (O8<[^~I_t[``_l}z!>};?mlYV' );
define( 'NONCE_KEY',        '7&|[o^o>RnxCCl6p]>r.>XRe%FL]bz[=c/V|LWK6ydTUnNH?[}i(BNeE^$_kNl=$' );
define( 'AUTH_SALT',        'P`c1p[h1bW9`Z=sSP{I!n8.LHus9;F+4T(0;EM%EjM=K>5 7-c(Nt7VCn2_RwUm8' );
define( 'SECURE_AUTH_SALT', '$bq2^-`I`IJKHirdkhGv|9+9|xSo.|8uiG{CW#*1s)2)5|p_hYY>sOi4=qOg7/>7' );
define( 'LOGGED_IN_SALT',   '}S:nq;u?F%w!B^eY-R,q@A:y{)OM-_%gafO_R}id+.b/<Uvya_>SN,ggVFH8p+Tm' );
define( 'NONCE_SALT',       'rg2W!om-}5#&VQrDH;1h(e7/tlIb(J@|<Z2tNt=;SRXCxYO)|Ui!72}GK*D>TsC:' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
