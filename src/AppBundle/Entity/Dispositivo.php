<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispositivo
 *
 * @ORM\Table(name="dispositivo", indexes={@ORM\Index(name="fk__dispositivo__dominio_marca_disp1_idx", columns={"ce_id_marca"}), @ORM\Index(name="fk__dispositivo__dominio_categoria_disp1_idx", columns={"ce_id_categoria"})})
 * @ORM\Entity
 */
class Dispositivo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao_modelo", type="string", length=150, nullable=true)
     */
    private $descricaoModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=255, nullable=true)
     */
    private $numeroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="mac_address", type="string", length=45, nullable=true)
     */
    private $macAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dispositivo", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDispositivo;

    /**
     * @var \AppBundle\Entity\DominioMarcaDisp
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DominioMarcaDisp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_marca", referencedColumnName="id_dominio_marca_disp")
     * })
     */
    private $ceMarca;

    /**
     * @var \AppBundle\Entity\DominioCategoriaDisp
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DominioCategoriaDisp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_categoria", referencedColumnName="id_dominio_categoria_disp")
     * })
     */
    private $ceCategoria;
	
	/**
	 *
	 * @return the string
	 */
	public function getDescricaoModelo() {
		return $this->descricaoModelo;
	}
	
	/**
	 *
	 * @param
	 *        	$descricaoModelo
	 */
	public function setDescricaoModelo($descricaoModelo) {
		$this->descricaoModelo = $descricaoModelo;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNumeroSerie() {
		return $this->numeroSerie;
	}
	
	/**
	 *
	 * @param
	 *        	$numeroSerie
	 */
	public function setNumeroSerie($numeroSerie) {
		$this->numeroSerie = $numeroSerie;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getMacAddress() {
		return $this->macAddress;
	}
	
	/**
	 *
	 * @param
	 *        	$macAddress
	 */
	public function setMacAddress($macAddress) {
		$this->macAddress = $macAddress;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdDispositivo() {
		return $this->idDispositivo;
	}
	
	/**
	 *
	 * @param
	 *        	$idDispositivo
	 */
	public function setIdDispositivo($idDispositivo) {
		$this->idDispositivo = $idDispositivo;
		return $this;
	}
	
	/**
	 *
	 * @return the DominioMarcaDisp
	 */
	public function getCeMarca() {
		return $this->ceMarca;
	}
	
	/**
	 *
	 * @param
	 *        	$ceMarca
	 */
	public function setCeMarca($ceMarca) {
		$this->ceMarca = $ceMarca;
		return $this;
	}
	
	/**
	 *
	 * @return the DominioCategoriaDisp
	 */
	public function getCeCategoria() {
		return $this->ceCategoria;
	}
	
	/**
	 *
	 * @param
	 *        	$ceCategoria
	 */
	public function setCeCategoria($ceCategoria) {
		$this->ceCategoria = $ceCategoria;
		return $this;
	}
	


}
