<?php
/**
 * The base configuration for WordPress
 *
 * Скрипт создания wp-config.php использует этот файл во время установки.
 * Вам не обязательно использовать веб-сайт, вы можете скопировать
 * этот файл в wp-config.php и ввести значения.
 *
 * Этот файл содержит следующие конфигурации:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Настройки MySQL - вы можете получить эту информацию со своего веб-хостинга. ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'w3schoolsuaphp_db' );

/** MySQL database имя пользователя */
define( 'DB_USER', 'root' );

/** MySQL database пароль */
define( 'DB_PASSWORD', 'root' );

/** MySQL имя хоста */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для использования при создании таблиц базы данных. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Тип Сортировка базы данных. Не меняйте это, если сомневаетесь. */
define( 'DB_COLLATE', '' );
