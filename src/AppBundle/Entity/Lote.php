<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lote
 *
 * @ORM\Table(name="lote", indexes={@ORM\Index(name="fk__lotes__empresa1_idx", columns={"ce_id_empresa"})})
 * @ORM\Entity
 */
class Lote
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_lote", type="string", length=45, nullable=false)
     */
    private $nomeLote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtde_itens_coletados", type="bigint", nullable=true)
     */
    private $qtdeItensColetados;

    /**
     * @var integer
     *
     * @ORM\Column(name="limite_itens", type="integer", nullable=true)
     */
    private $limiteItens;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_fechamento", type="datetime", nullable=true)
     */
    private $dtFechamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_exclusao", type="datetime", nullable=true)
     */
    private $dtExclusao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lote", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLote;

    /**
     * @var \AppBundle\Entity\Empresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_empresa", referencedColumnName="id_empresa")
     * })
     */
    private $ceEmpresa;
	
	/**
	 *
	 * @return the string
	 */
	public function getNomeLote() {
		return $this->nomeLote;
	}
	
	/**
	 *
	 * @param
	 *        	$nomeLote
	 */
	public function setNomeLote($nomeLote) {
		$this->nomeLote = $nomeLote;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtCadastro() {
		return $this->dtCadastro;
	}
	
	/**
	 *
	 * @param \DateTime $dtCadastro        	
	 */
	public function setDtCadastro(\DateTime $dtCadastro) {
		$this->dtCadastro = $dtCadastro;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getQtdeItensColetados() {
		return $this->qtdeItensColetados;
	}
	
	/**
	 *
	 * @param
	 *        	$qtdeItensColetados
	 */
	public function setQtdeItensColetados($qtdeItensColetados) {
		$this->qtdeItensColetados = $qtdeItensColetados;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getLimiteItens() {
		return $this->limiteItens;
	}
	
	/**
	 *
	 * @param
	 *        	$limiteItens
	 */
	public function setLimiteItens($limiteItens) {
		$this->limiteItens = $limiteItens;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtFechamento() {
		return $this->dtFechamento;
	}
	
	/**
	 *
	 * @param \DateTime $dtFechamento        	
	 */
	public function setDtFechamento(\DateTime $dtFechamento = null) {
		if(!$dtFechamento == null){
			$this->dtFechamento = $dtFechamento;
		}
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtExclusao() {
		return $this->dtExclusao;
	}
	
	/**
	 *
	 * @param \DateTime $dtExclusao        	
	 */
	public function setDtExclusao(\DateTime $dtExclusao = null) {
		if(!$dtExclusao == null){
			$this->dtExclusao = $dtExclusao;
		}
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getAtivo() {
		return $this->ativo;
	}
	
	/**
	 *
	 * @param
	 *        	$ativo
	 */
	public function setAtivo($ativo) {
		$this->ativo = $ativo;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdLote() {
		return $this->idLote;
	}
	
	/**
	 *
	 * @param
	 *        	$idLote
	 */
	public function setIdLote($idLote) {
		$this->idLote = $idLote;
		return $this;
	}
	
	/**
	 *
	 * @return the Empresa
	 */
	public function getCeEmpresa() {
		return $this->ceEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$ceEmpresa
	 */
	public function setCeEmpresa($ceEmpresa) {
		$this->ceEmpresa = $ceEmpresa;
		return $this;
	}
	


}

