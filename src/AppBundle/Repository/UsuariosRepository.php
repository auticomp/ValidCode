<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


class UsuarioRepository extends EntityRepository
{
	
	public function loadUserByUsername($username) {
		
		return $this->createQueryBuilder('u')
			->where('u.emailUsuario = :emailUsuario')
			->setParameter('emailUsuario', $username)
			->getQuery()
			->getOneOrNullResult();
	}
	

}