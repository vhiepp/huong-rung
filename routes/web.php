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
    $data = ['activePage' => 0];
    return view('pages.home', $data);
});

$router->get('/khu-hoi-truong-to-chuc-tiec', function () use ($router) {
    $data = ['activePage' => 1, 'title' => 'Khu tiệc, hội trường'];
    return view('pages.restaurant.hall', $data);
});

$router->get('/khu-phong-lanh', function () use ($router) {
    $data = ['activePage' => 2, 'title' => 'Khu phòng ăn phòng lạnh'];
    return view('pages.restaurant.cold-room', $data);
});

$router->get('/khu-san-vuon', function () use ($router) {
    $data = ['activePage' => 3, 'title' => 'Khu bàn ăn sân vườn'];
    return view('pages.restaurant.garden', $data);
});

$router->get('/mon-an-noi-bat', function () use ($router) {
    $data = ['activePage' => 4, 'title' => 'Món ăn nổi bật'];
    return view('pages.restaurant.menu', $data);
});

$router->get('/nha-nghi', function () use ($router) {
    $data = ['activePage' => 5, 'title' => 'Nhà nghỉ khách sạn'];
    return view('pages.motel.index', $data);
});

$router->get('/lien-he-chung-toi', function () use ($router) {
    $data = ['activePage' => 6, 'title' => 'Liên hệ chúng tôi, đặt phòng, đặt tiệc'];
    return view('pages.contact.index', $data);
});
