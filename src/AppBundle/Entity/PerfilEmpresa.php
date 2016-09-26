<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerfilEmpresa
 *
 * @ORM\Table(name="perfil_empresa", indexes={@ORM\Index(name="fk__perfil_empresa__empresas1_idx", columns={"ce_id_empresa"}), @ORM\Index(name="fk__perfil_empresa__perfil_usuario1_idx", columns={"ce_id_perfil"})})
 * @ORM\Entity
 */
class PerfilEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="allias_empresa", type="string", length=45, nullable=true)
     */
    private $alliasEmpresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil_empresa", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerfilEmpresa;

    /**
     * @var \AppBundle\Entity\PerfilUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_perfil", referencedColumnName="id_perfil_usuario")
     * })
     */
    private $cePerfil;

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
	public function getAlliasEmpresa() {
		return $this->alliasEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$alliasEmpresa
	 */
	public function setAlliasEmpresa($alliasEmpresa) {
		$this->alliasEmpresa = $alliasEmpresa;
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
	public function getIdPerfilEmpresa() {
		return $this->idPerfilEmpresa;
	}
	
	/**
	 *
	 * @param
	 *        	$idPerfilEmpresa
	 */
	public function setIdPerfilEmpresa($idPerfilEmpresa) {
		$this->idPerfilEmpresa = $idPerfilEmpresa;
		return $this;
	}
	
	/**
	 *
	 * @return the PerfilUsuario
	 */
	public function getCePerfil() {
		return $this->cePerfil;
	}
	
	/**
	 *
	 * @param
	 *        	$cePerfil
	 */
	public function setCePerfil($cePerfil) {
		$this->cePerfil = $cePerfil;
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
