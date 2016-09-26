<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;


class UsuariosRepository extends EntityRepository implements UserLoaderInterface
{
	
	
	/**
	 * 
	 * @param unknown $em
	 * @param string $class
	 */
	public function __construct($em, $class = 'AppBundle:Usuarios'){
		$this->_em = $em;
	}
	/**
	 * 
	 * @param unknown $username
	 */
	public function loadUserByUsername($username) {
		
		$qb = $this->_em->createQueryBuilder();
				
		echo $username;
		
		$dados = $qb->select('u')
			->from('AppBundle:Usuarios', 'u')
			->where('u.emailUsuario = :emailUsuario')
			->setParameter('emailUsuario', $username)
			->getQuery()
			->getOneOrNullResult();
		
			print_r($dados);
			
			return "";
	}
	

}