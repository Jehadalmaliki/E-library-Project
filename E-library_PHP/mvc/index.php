<?php



use App\Controllers\HomeController;
use App\System\Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/cart', [HomeController::class, 'cart']);
$router->get('/catogrypag', [HomeController::class, 'catogrypag']);
$router->get('/details', [HomeController::class, 'details']);
$router->get('/checkout', [HomeController::class, 'checkout']);


$router->notFoundHandler(function () {
    echo "Page Not Found";
});

$router->run();