<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", uniqueConstraints={@ORM\UniqueConstraint(name="cnpj_empresa_UNIQUE", columns={"cnpj_empresa"})}, indexes={@ORM\Index(name="fk__empresa__dominio_tipo_empresa1_idx", columns={"ce_tipo_empresa"}), @ORM\Index(name="fk__empresa__dominio_tam_empresa1_idx", columns={"ce_tam_empresa"}), @ORM\Index(name="fk__empresa__empresa1_idx", columns={"ce_id_matriz"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_empresa", type="string", length=45, nullable=false)
     */
    private $cnpjEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="inscr_est_empresa", type="string", length=45, nullable=true)
     */
    private $inscrEstEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_fantasia", type="string", length=45, nullable=true)
     */
    private $nomeFantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=45, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_abertura", type="date", nullable=true)
     */
    private $dataAbertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativa", type="integer", nullable=true)
     */
    private $ativa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_empresa", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpresa;

    /**
     * @var \AppBundle\Entity\Empresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_matriz", referencedColumnName="id_empresa")
     * })
     */
    private $ceMatriz;

    /**
     * @var \AppBundle\Entity\DominioTipoEmpresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DominioTipoEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_tipo_empresa", referencedColumnName="id_dominio_tipo_empresa")
     * })
     */
    private $ceTipoEmpresa;

    /**
     * @var \AppBundle\Entity\DominioTamEmpresa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DominioTamEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_tam_empresa", referencedColumnName="id_dominio_tam_empresa")
     * })
     */
    private $ceTamEmpresa;
	
	/**
	 *
	 * @return the string
	 */
	public function getCnpjEmpresa() {
		return $this->cnpjEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$cnpjEmpresa
	 */
	public function setCnpjEmpresa($cnpjEmpresa) {
		$this->cnpjEmpresa = $cnpjEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getInscrEstEmpresa() {
		return $this->inscrEstEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$inscrEstEmpresa
	 */
	public function setInscrEstEmpresa($inscrEstEmpresa) {
		$this->inscrEstEmpresa = $inscrEstEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNomeFantasia() {
		return $this->nomeFantasia;
	}
	
	/**
	 *
	 * @param
	 *        	$nomeFantasia
	 */
	public function setNomeFantasia($nomeFantasia) {
		$this->nomeFantasia = $nomeFantasia;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getRazaoSocial() {
		return $this->razaoSocial;
	}
	
	/**
	 *
	 * @param
	 *        	$razaoSocial
	 */
	public function setRazaoSocial($razaoSocial) {
		$this->razaoSocial = $razaoSocial;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDataAbertura() {
		return $this->dataAbertura;
	}
	
	/**
	 *
	 * @param \DateTime $dataAbertura        	
	 */
	public function setDataAbertura(\DateTime $dataAbertura) {
		$this->dataAbertura = $dataAbertura;
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
	public function getAtiva() {
		return $this->ativa;
	}
	
	/**
	 *
	 * @param
	 *        	$ativa
	 */
	public function setAtiva($ativa) {
		$this->ativa = $ativa;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdEmpresa() {
		return $this->idEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$idEmpresa
	 */
	public function setIdEmpresa($idEmpresa) {
		$this->idEmpresa = $idEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the Empresa
	 */
	public function getCeMatriz() {
		return $this->ceMatriz;
	}
	
	/**
	 *
	 * @param
	 *        	$ceMatriz
	 */
	public function setCeMatriz($ceMatriz) {
		$this->ceMatriz = $ceMatriz;
		return $this;
	}
	
	/**
	 *
	 * @return the DominioTipoEmpresa
	 */
	public function getCeTipoEmpresa() {
		return $this->ceTipoEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$ceTipoEmpresa
	 */
	public function setCeTipoEmpresa($ceTipoEmpresa) {
		$this->ceTipoEmpresa = $ceTipoEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the DominioTamEmpresa
	 */
	public function getCeTamEmpresa() {
		return $this->ceTamEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$ceTamEmpresa
	 */
	public function setCeTamEmpresa($ceTamEmpresa) {
		$this->ceTamEmpresa = $ceTamEmpresa;
		return $this;
	}
	


}

