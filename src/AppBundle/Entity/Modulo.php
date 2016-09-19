<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulo
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity
 */
class Modulo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_modulo", type="string", length=45, nullable=true)
     */
    private $nomeModulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;
	
	/**
	 *
	 * @return the string
	 */
	public function getNomeModulo() {
		return $this->nomeModulo;
	}
	
	/**
	 *
	 * @param
	 *        	$nomeModulo
	 */
	public function setNomeModulo($nomeModulo) {
		$this->nomeModulo = $nomeModulo;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdModulo() {
		return $this->idModulo;
	}
	
	/**
	 *
	 * @param
	 *        	$idModulo
	 */
	public function setIdModulo($idModulo) {
		$this->idModulo = $idModulo;
		return $this;
	}
	


}

