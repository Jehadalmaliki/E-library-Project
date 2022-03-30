<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\controllers\Useradds;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\UsersController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\CityController;
use coding\app\controllers\payementsController;
use coding\app\controllers\BooksController;
use coding\app\controllers\offersController;
use coding\app\controllers\ordersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */

// Categories Router
Router::get('/categories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);

//User Router
Router::get('/users',[UsersController::class,'listAll']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::post('/save_user',[UsersController::class,'saveUser']);

//Authore Router
Router::get('/authors',[AuthorsController::class,'listAll']);
Router::get('/new_author',[AuthorsController::class,'newAuthor']);
Router::post('/save_author',[AuthorsController::class,'createAuthor']);


//Publisher Router
Router::get('/publisher',[publishersController::class,'listAll']);
Router::get('/new_Publisher',[publishersController::class,'newPublisher']);
Router::post('/save_Publishers',[publishersController::class,'createPublisher']);
//Cities
Router::get('/city',[CityController::class,'listAll']);
Router::get('/new',[CityController::class,'newCity']);
Router::post('/save_city',[CityController::class,'createCity']);

//useradd

Router::get('/useradd',[Useradds::class,'listAll']);
Router::get('/newuseradd',[Useradds::class,'newUseradd']);
Router::post('/save_useradd',[Useradds::class,'creat']);

// Payements Router
Router::get('/Payements',[PayementsController::class,'listAll']);
Router::get('/new_Payement',[PayementsController::class,'create']);
Router::post('/save_Payements',[PayementsController::class,'store']);

// Books Router
Router::get('/books',[BooksController::class,'listAll']);
Router::get('/new_books',[BooksController::class,'newbooks']);
Router::post('/save_books',[BooksController::class,'store']);

// offers Router
Router::get('/offers',[offersController::class,'listAll']);
Router::get('/new_offers',[offersController::class,'newoffers']);
Router::post('/save_offers',[offersController::class,'store']);

// orders Router
Router::get('/order',[ordersController::class,'listAll']);
Router::get('/new_orders',[ordersController::class,'newOrder']);
Router::post('/save_orders',[ordersController::class,'store']);

/** end of web routes */
$system->start();

