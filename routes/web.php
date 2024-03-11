<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [PageController::class, 'index']);

$router->get('/khu-hoi-truong-to-chuc-tiec', [PageController::class, 'showHallPage']);

$router->get('/khu-phong-lanh', [PageController::class, 'showColdRoomPage']);

$router->get('/khu-san-vuon', [PageController::class, 'showGardenPage']);

$router->get('/mon-an-noi-bat', [PageController::class, 'showMenuPage']);

$router->get('/nha-nghi', [PageController::class, 'showMotelPage']);

$router->get('/lien-he-chung-toi', [PageController::class, 'showContactPage']);
