<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk__usuarios__perfil_usuario_idx", columns={"ce_perfil_usuario"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_usuario", type="string", length=150, nullable=false)
     */
    private $nomeUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="email_usuario", type="string", length=45, nullable=true)
     */
    private $emailUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_usuario", type="string", length=45, nullable=true)
     */
    private $senhaUsuario;

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
     * @ORM\Column(name="id_usuario", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var \AppBundle\Entity\PerfilUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_perfil_usuario", referencedColumnName="id_perfil_usuario")
     * })
     */
    private $cePerfilUsuario;
	
	/**
	 *
	 * @return the string
	 */
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$nomeUsuario
	 */
	public function setNomeUsuario($nomeUsuario) {
		$this->nomeUsuario = $nomeUsuario;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getEmailUsuario() {
		return $this->emailUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$emailUsuario
	 */
	public function setEmailUsuario($emailUsuario) {
		$this->emailUsuario = $emailUsuario;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getSenhaUsuario() {
		return $this->senhaUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$senhaUsuario
	 */
	public function setSenhaUsuario($senhaUsuario) {
		$this->senhaUsuario = $senhaUsuario;
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
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$idUsuario
	 */
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	
	/**
	 *
	 * @return the PerfilUsuario
	 */
	public function getCePerfilUsuario() {
		return $this->cePerfilUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$cePerfilUsuario
	 */
	public function setCePerfilUsuario($cePerfilUsuario) {
		$this->cePerfilUsuario = $cePerfilUsuario;
		return $this;
	}
	


}

