<?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');
    $router->get('countries', 'CountriesController@index');
    $router->post('addcountry', 'CountriesController@add');

    $router->get('feedback', 'FeedbackController@home');
    $router->post('feedback', 'FeedbackController@store');
    $router->get('feedback/delete', 'FeedbackController@delete');
    $router->get('feedback/edit', 'FeedbackController@edit');
    $router->post('feedback/edit', 'FeedbackController@update');

    $router->get('login', 'LoginController@index');
    $router->post('login', 'LoginController@login');
