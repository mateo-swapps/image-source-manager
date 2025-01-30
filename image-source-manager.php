<?php
// filepath: mi-plugin.php
/**
 * Plugin Name: Mi Plugin
 * Description: Un plugin básico para verificar la instalación.
 * Version: 1.0
 * Author: Tu Nombre
 */

// Cargar el autoload de Composer
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

// Inicializar el plugin
if (class_exists('Swappsco\\ImageSourceManager\\MyPlugin')) {
    new Swappsco\ImageSourceManager\MyPlugin();
}