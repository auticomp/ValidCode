<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\PerfilUsuario;

class PerfilUsuarioRepository extends EntityRepository
{
	
	function __construct($em, $class = 'AppBundle:PerfilUsuario')
	{
		$this->_em = $em;
	}
	
	
	public function getRolesUsuario($idUsuario)
	{
		
		return 'ROLE_ADMIN';
		
	}
}