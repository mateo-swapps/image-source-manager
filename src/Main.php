<?php
// filepath: src/Main.php
namespace Swappsco\ImageSourceManager;

class MyPlugin {
    public function __construct() {
        add_action('init', [$this, 'init']);
    }

    public function init() {
        // Acción simple para verificar que el plugin está funcionando
        error_log('MiPlugin se ha inicializado correctamente.');
    }
}