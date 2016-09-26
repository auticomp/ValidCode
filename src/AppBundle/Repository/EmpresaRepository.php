<?php
namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Repository\Interfaces\IRepositoryFactory;


class EmpresaRepository extends EntityRepository implements IRepositoryFactory {
	
	/**
	 * 
	 * @param EntityManager $em
	 * @param AppBundle:Empresa $class
	 */	
	public function __construct(EntityManager $em, $class = 'AppBundle:Empresa'){
		$this->_em = $em;
		$this->_class = $class;
	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\IRepositoryFactory::SelecioneTodos()
	 */
	public function SelecioneTodos() {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\IRepositoryFactory::SelecioneApenasUm()
	 */
	public function SelecioneApenasUm() {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\IRepositoryFactory::Salvar()
	 */
	public function Salvar($entity) {
		
		$this->_em->persist($entity);
		$this->_em->flush();

	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\IRepositoryFactory::Atualizar()
	 */
	public function Atualizar($entity) {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\IRepositoryFactory::Excluir()
	 */
	public function Excluir($id) {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \AppBundle\Repository\Interfaces\IRepositoryFactory::jaExiste()
	 */
	public function jaExiste($id) {
		
		$exists = $this->_em->getRepository($this->_class)->findBy(array('cnpjEmpresa' => $id));
		
		return count($exists);

	}

}