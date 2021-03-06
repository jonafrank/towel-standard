<?php

add_route('get', '/', array(
    'controller' => new Towel\Controller\BaseController(),
    'action' => 'index',
));

if ($appConfig['debug']) {
    get_app()->silex()->error(function (\Exception $e)  {
        $controller = new Towel\Controller\BaseController();
        return $controller->routeError($e);
    });
}
