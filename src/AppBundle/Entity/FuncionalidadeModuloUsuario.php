<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuncionalidadeModuloUsuario
 *
 * @ORM\Table(name="funcionalidade_modulo_usuario", uniqueConstraints={@ORM\UniqueConstraint(name="uk_func_mod_user", columns={"ce_id_funcionalidade", "ce_id_modulo", "ce_id_perfil"})}, indexes={@ORM\Index(name="fk_funcionalidade_modulo_usuario__funcionalidade1_idx", columns={"ce_id_funcionalidade"}), @ORM\Index(name="fk_funcionalidade_modulo_usuario__modulo1_idx", columns={"ce_id_modulo"}), @ORM\Index(name="fk_funcionalidade_modulo_usuario__perfil_usuario1_idx", columns={"ce_id_perfil"})})
 * @ORM\Entity
 */
class FuncionalidadeModuloUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="visualizar", type="integer", nullable=true)
     */
    private $visualizar;

    /**
     * @var integer
     *
     * @ORM\Column(name="editar", type="integer", nullable=true)
     */
    private $editar;

    /**
     * @var integer
     *
     * @ORM\Column(name="excluir", type="integer", nullable=true)
     */
    private $excluir;

    /**
     * @var integer
     *
     * @ORM\Column(name="incluir", type="integer", nullable=true)
     */
    private $incluir;

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
     * @ORM\Column(name="id_func_mod_user", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFuncModUser;

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
     * @var \AppBundle\Entity\Modulo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $ceModulo;

    /**
     * @var \AppBundle\Entity\Funcionalidade
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Funcionalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_funcionalidade", referencedColumnName="id_funcionalidade")
     * })
     */
    private $ceFuncionalidade;
	
	/**
	 *
	 * @return the integer
	 */
	public function getVisualizar() {
		return $this->visualizar;
	}
	
	/**
	 *
	 * @param
	 *        	$visualizar
	 */
	public function setVisualizar($visualizar) {
		$this->visualizar = $visualizar;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getEditar() {
		return $this->editar;
	}
	
	/**
	 *
	 * @param
	 *        	$editar
	 */
	public function setEditar($editar) {
		$this->editar = $editar;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getExcluir() {
		return $this->excluir;
	}
	
	/**
	 *
	 * @param
	 *        	$excluir
	 */
	public function setExcluir($excluir) {
		$this->excluir = $excluir;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIncluir() {
		return $this->incluir;
	}
	
	/**
	 *
	 * @param
	 *        	$incluir
	 */
	public function setIncluir($incluir) {
		$this->incluir = $incluir;
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
	public function getIdFuncModUser() {
		return $this->idFuncModUser;
	}
	
	/**
	 *
	 * @param
	 *        	$idFuncModUser
	 */
	public function setIdFuncModUser($idFuncModUser) {
		$this->idFuncModUser = $idFuncModUser;
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
	 * @return the Modulo
	 */
	public function getCeModulo() {
		return $this->ceModulo;
	}
	
	/**
	 *
	 * @param
	 *        	$ceModulo
	 */
	public function setCeModulo($ceModulo) {
		$this->ceModulo = $ceModulo;
		return $this;
	}
	
	/**
	 *
	 * @return the Funcionalidade
	 */
	public function getCeFuncionalidade() {
		return $this->ceFuncionalidade;
	}
	
	/**
	 *
	 * @param
	 *        	$ceFuncionalidade
	 */
	public function setCeFuncionalidade($ceFuncionalidade) {
		$this->ceFuncionalidade = $ceFuncionalidade;
		return $this;
	}
	


}

