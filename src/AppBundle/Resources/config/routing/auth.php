<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('auth_login', new Route(
		'/Login',
		array('_controller' => 'AppBundle:Auth:login'),
		array(),
		array(),
		'',
		array(),
		array('GET', 'POST')
		));

return $collection;