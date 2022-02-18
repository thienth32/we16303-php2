<?php
/**
 * Thiết lập db
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'php2_asm1',
    'username' => 'root',
    'password' => '12345678',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

/**
 * thiết lập view
 */
use eftec\bladeone\BladeOne;
function view($viewFile, $data = []){
    $blade = new BladeOne('./app/views', './storage', BladeOne::MODE_DEBUG);
    echo $blade->run($viewFile, $data);
}
?>