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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite1' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(JM(/3NgycHlTJ.zFd]J`eVQ[`j)k&0[B^B a<h14CCs]#u/@x.lgW]iG5&2CJ/|' );
define( 'SECURE_AUTH_KEY',  ',}?vXoXIT^*`nrU.*z%Rv.L, m9_[0eun-2!9OmAztLTZBMtSG^SJ^-t~a0w|!2*' );
define( 'LOGGED_IN_KEY',    '<HH)1nJw&|zfK}vgcZGs~7%UmU7/=@!NbY<JDXZrNX<#|}zLk9DKhTx{Y-S$t~a}' );
define( 'NONCE_KEY',        'DT1bq?+yeUza9g,yF=%#Qp|Q{|Vn[8BZdDovi]1YTmYA5nY8TTxGm^+vK)Xx$UVA' );
define( 'AUTH_SALT',        '=H+p*w``lN|ND^hGiYvqLgx2B[De]z7;eMd~@tozE(_]I[:i]Fv2VyAmQw`r%0P3' );
define( 'SECURE_AUTH_SALT', 'qtQvLI5-8u{tcLZ)RK_r[U6.]Z<&Fx3i9q!RnDS9wdu]-TKRvb=0:{)uI]jhj5>!' );
define( 'LOGGED_IN_SALT',   '3dWd52Yq;*Q rcI[R_-mMY4=wQ28st?APmhlPK6!(q2o`?0XH!CzTC2-|E@-M5Y~' );
define( 'NONCE_SALT',       '?zN#<w.!#BEF)3d>)*trWj6+q.a=i{Rmir94z0%1uavB`Bj7Om/`2BjVz6.mMZyt' );

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
