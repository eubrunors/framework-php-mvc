<?php

$app = new Application();

require_once

$app->$router->get('/', function(){
    return 'Hello World';
});

$app->run();