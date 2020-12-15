<?php
$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('/categories', 'BlogController@categories');
    $router->get('/category/{category_name}', 'BlogController@category');
    $router->get('/articles', 'BlogController@articles');
    $router->get('/article/{post_title}', 'BlogController@article');
    // $router->get('/items', 'PostController@index');
    // $router->post('/items', 'PostController@create');
    // $router->get('/items/{id}', 'PostController@show');
    // $router->put('/items/{id}', 'PostController@update');
    // $router->delete('/items/{id}', 'PostController@destroy');

});
