<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use AppBundle\Entity\Usuarios;


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
		
		$retorno = false;
		
		$rs = $this->_em->createQueryBuilder();
		
		$retorno = $rs->select('u')
			->from("AppBundle:Usuarios","u")
            ->where("u.emailUsuario = :username")
            ->setParameter("username", $username)
            ->getQuery()
            ->getOneOrNullResult();
		
            
		return $retorno;
		
	}
	

}