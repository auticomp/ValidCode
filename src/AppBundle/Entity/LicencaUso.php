<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicencaUso
 *
 * @ORM\Table(name="licenca_uso")
 * @ORM\Entity
 */
class LicencaUso
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_emissao", type="datetime", nullable=false)
     */
    private $dtEmissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_liberacao", type="datetime", nullable=false)
     */
    private $dtLiberacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="prazo_expiracao", type="integer", nullable=false)
     */
    private $prazoExpiracao;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_licenca", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $precoLicenca;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_licenca_uso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLicencaUso;
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtEmissao() {
		return $this->dtEmissao;
	}
	
	/**
	 *
	 * @param \DateTime $dtEmissao        	
	 */
	public function setDtEmissao(\DateTime $dtEmissao) {
		$this->dtEmissao = $dtEmissao;
		return $this;
	}
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtLiberacao() {
		return $this->dtLiberacao;
	}
	
	/**
	 *
	 * @param \DateTime $dtLiberacao        	
	 */
	public function setDtLiberacao(\DateTime $dtLiberacao) {
		$this->dtLiberacao = $dtLiberacao;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getPrazoExpiracao() {
		return $this->prazoExpiracao;
	}
	
	/**
	 *
	 * @param
	 *        	$prazoExpiracao
	 */
	public function setPrazoExpiracao($prazoExpiracao) {
		$this->prazoExpiracao = $prazoExpiracao;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getPrecoLicenca() {
		return $this->precoLicenca;
	}
	
	/**
	 *
	 * @param
	 *        	$precoLicenca
	 */
	public function setPrecoLicenca($precoLicenca) {
		$this->precoLicenca = $precoLicenca;
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
	public function getIdLicencaUso() {
		return $this->idLicencaUso;
	}
	
	/**
	 *
	 * @param
	 *        	$idLicencaUso
	 */
	public function setIdLicencaUso($idLicencaUso) {
		$this->idLicencaUso = $idLicencaUso;
		return $this;
	}
	


}

