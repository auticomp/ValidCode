<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioTamEmpresa
 *
 * @ORM\Table(name="dominio_tam_empresa")
 * @ORM\Entity
 */
class DominioTamEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="tamanho_empresa", type="string", length=45, nullable=true)
     */
    private $tamanhoEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_tam_empresa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioTamEmpresa;
	
	/**
	 *
	 * @return the string
	 */
	public function getTamanhoEmpresa() {
		return $this->tamanhoEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$tamanhoEmpresa
	 */
	public function setTamanhoEmpresa($tamanhoEmpresa) {
		$this->tamanhoEmpresa = $tamanhoEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdDominioTamEmpresa() {
		return $this->idDominioTamEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$idDominioTamEmpresa
	 */
	public function setIdDominioTamEmpresa($idDominioTamEmpresa) {
		$this->idDominioTamEmpresa = $idDominioTamEmpresa;
		return $this;
	}
	


}

