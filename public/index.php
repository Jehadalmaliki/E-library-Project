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
use coding\app\controllers\HomeController;
use coding\app\controllers\rolesController;
use coding\app\controllers\user_pay_MethController;
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

//Home Router

Router::get('/', [HomeController::class, 'index']);
Router::get('/cart', [HomeController::class, 'cart']);
Router::get('/catogrypag', [HomeController::class, 'catogrypag']);
Router::get('/detailspag', [HomeController::class, 'details']);
Router::get('/checkout', [HomeController::class, 'checkout']);
//Roles Router
Router::get('/roles',[rolesController::class,'listAll']);
Router::get('/new_role',[rolesController::class,'add_role']);
Router::get('/edit_role',[rolesController::class,'editrole']);
Router::get('/remove_role',[rolesController::class,'remove']);
Router::post('/save_role',[rolesController::class,'store']);
Router::post('/update_role',[rolesController::class,'update']);


// Categories
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
Router::get('/edit_user',[UsersController::class,'editUser']);

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
Router::post('/save_book',[BooksController::class,'createbooks']);

// offers Router
Router::get('/offers',[offersController::class,'listAll']);
Router::get('/new_offers',[offersController::class,'newoffers']);
Router::post('/save_offers',[offersController::class,'store']);

// orders Router
Router::get('/order',[ordersController::class,'listAll']);
Router::get('/new_orders',[ordersController::class,'newOrder']);
Router::post('/save_orders',[ordersController::class,'store']);

//user_payment_methodes Router
Router::get('/user_payment',[user_pay_MethController::class,'listAll']);
Router::get('/new_user_payment',[user_pay_MethController::class,'add_user_payment']);
Router::post('/save_user_payment',[user_pay_MethController::class,'store']);


/** end of web routes */
$system->start();

