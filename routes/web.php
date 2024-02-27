<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return view('pages.home');
});

$router->get('/khu-hoi-truong-to-chuc-tiec', function () use ($router) {
    return view('pages.restaurant.hall', ['title' => 'Khu tiệc, hội trường']);
});

$router->get('/khu-phong-lanh', function () use ($router) {
    return view('pages.restaurant.cold-room', ['title' => 'Khu phòng ăn phòng lạnh']);
});

$router->get('/khu-san-vuon', function () use ($router) {
    return view('pages.restaurant.garden', ['title' => 'Khu bàn ăn sân vườn']);
});

$router->get('/mon-an-noi-bat', function () use ($router) {
    return view('pages.restaurant.menu', ['title' => 'Món ăn nổi bật']);
});

$router->get('/nha-nghi', function () use ($router) {
    return view('pages.motel.index', ['title' => 'Nhà nghỉ khách sạn']);
});

$router->get('/lien-he-chung-toi', function () use ($router) {
    return view('pages.contact.index', ['title' => 'Liên hệ chúng tôi, đặt phòng, đặt tiệc']);
});
