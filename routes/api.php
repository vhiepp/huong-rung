<?php

$router->get('api/hihi', function () use ($router) {
    return response()->json("hihi");  
});