<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('validcode_index', new Route(
		'/',
		array('_controller' => 'apiValidCodeBundle:Default:index'),
		array(),
		array(),
		'',
		array(),
		array('GET', 'POST')
		));



return $collection;