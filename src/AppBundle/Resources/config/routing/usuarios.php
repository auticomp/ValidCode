<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('usuarios_index', new Route(
		'/',
		array('_controller' => 'AppBundle:Usuarios:index'),
		array(),
		array(),
		'',
		array(),
		array('GET')
		));

$collection->add('usuarios_show', new Route(
		'/{id}/show',
		array('_controller' => 'AppBundle:Usuarios:show'),
		array(),
		array(),
		'',
		array(),
		array('GET')
		));


$collection->add('usuarios_new', new Route(
		'/new',
		array('_controller' => 'AppBundle:Usuarios:new'),
		array(),
		array(),
		'',
		array(),
		array('GET', 'POST')
		));

$collection->add('usuarios_edit', new Route(
		'/{id}/edit',
		array('_controller' => 'AppBundle:Usuarios:edit'),
		array(),
		array(),
		'',
		array(),
		array('GET', 'POST', 'PUT')
		));

$collection->add('usuarios_delete', new Route(
		'/{id}/delete',
		array('_controller' => 'AppBundle:Usuarios:delete'),
		array(),
		array(),
		'',
		array(),
		array('DELETE')
		));


return $collection;