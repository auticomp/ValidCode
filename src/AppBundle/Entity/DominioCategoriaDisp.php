<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioCategoriaDisp
 *
 * @ORM\Table(name="dominio_categoria_disp")
 * @ORM\Entity
 */
class DominioCategoriaDisp
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoria_disp", type="string", length=45, nullable=false)
     */
    private $categoriaDisp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_categoria_disp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioCategoriaDisp;
	
	/**
	 *
	 * @return the string
	 */
	public function getCategoriaDisp() {
		return $this->categoriaDisp;
	}
	
	/**
	 *
	 * @param
	 *        	$categoriaDisp
	 */
	public function setCategoriaDisp($categoriaDisp) {
		$this->categoriaDisp = $categoriaDisp;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdDominioCategoriaDisp() {
		return $this->idDominioCategoriaDisp;
	}
	
	/**
	 *
	 * @param
	 *        	$idDominioCategoriaDisp
	 */
	public function setIdDominioCategoriaDisp($idDominioCategoriaDisp) {
		$this->idDominioCategoriaDisp = $idDominioCategoriaDisp;
		return $this;
	}
	


}
