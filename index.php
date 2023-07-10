<?php

$app = new Aplication();

$app->$router->get('/', fuction(){
    return 'Hello World';
});

$app->run();