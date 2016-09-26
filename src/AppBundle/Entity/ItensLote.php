<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItensLote
 *
 * @ORM\Table(name="itens_lote", indexes={@ORM\Index(name="fk__itens_lote__usuarios1_idx", columns={"ce_id_usuario"}), @ORM\Index(name="fk__itens_lote__lotes1_idx", columns={"ce_id_lote"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItensLoteRepository")
 */
class ItensLote
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_codigo_barra", type="string", length=45, nullable=true)
     */
    private $nroCodigoBarra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_coleta", type="datetime", nullable=true)
     */
    private $dtColeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_itens_lote", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItensLote;

    /**
     * @var \AppBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $ceUsuario;

    /**
     * @var \AppBundle\Entity\Lote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_lote", referencedColumnName="id_lote")
     * })
     */
    private $ceLote;
	
	/**
	 *
	 * @return the string
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 *
	 * @param
	 *        	$descricao
	 */
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNroCodigoBarra() {
		return $this->nroCodigoBarra;
	}
	
	/**
	 *
	 * @param
	 *        	$nroCodigoBarra
	 */
	public function setNroCodigoBarra($nroCodigoBarra) {
		$this->nroCodigoBarra = $nroCodigoBarra;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtColeta() {
		return $this->dtColeta;
	}
	
	/**
	 *
	 * @param \DateTime $dtColeta        	
	 */
	public function setDtColeta(\DateTime $dtColeta) {
		$this->dtColeta = $dtColeta;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdItensLote() {
		return $this->idItensLote;
	}
	
	/**
	 *
	 * @param
	 *        	$idItensLote
	 */
	public function setIdItensLote($idItensLote) {
		$this->idItensLote = $idItensLote;
		return $this;
	}
	
	/**
	 *
	 * @return the Usuarios
	 */
	public function getCeUsuario() {
		return $this->ceUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$ceUsuario
	 */
	public function setCeUsuario($ceUsuario) {
		$this->ceUsuario = $ceUsuario;
		return $this;
	}
	
	/**
	 *
	 * @return the Lote
	 */
	public function getCeLote() {
		return $this->ceLote;
	}
	
	/**
	 *
	 * @param
	 *        	$ceLote
	 */
	public function setCeLote($ceLote) {
		$this->ceLote = $ceLote;
		return $this;
	}
	


}
