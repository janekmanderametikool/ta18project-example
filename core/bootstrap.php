<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

require 'controllers/PagesController.php';
require 'controllers/CountriesController.php';
require 'controllers/FeedbackController.php';
require 'controllers/LoginController.php';

function view($name, $data = []) {

    extract($data);

    return require "views/{$name}.view.php";
}