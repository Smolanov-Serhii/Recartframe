<?php
/*
Plugin Name: Каталог книг
Plugin URI: https://tokmakov.msk.ru
Description: Позволяет создать на сайте простой каталог книг с таксономией по жанрам.
Version: 1.0
Author: Евгений Токмаков
Author URI: https://tokmakov.msk.ru
*/

register_activation_hook(__FILE__, function() {
    // проверяем права пользователя на установку плагинов
    if (!current_user_can('activate_plugins')) {
        return;
    }
});

register_deactivation_hook(__FILE__, function() {
    // проверяем права пользователя на деактивацию плагинов
    if (!current_user_can('deactivate_plugins')) {
        return;
    }
});