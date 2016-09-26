<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerfilUsuario
 *
 * @ORM\Table(name="perfil_usuario")
 * @ORM\Entity
 */
class PerfilUsuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="perfil_usuario", type="string", length=45, nullable=true)
     */
    private $perfilUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil_usuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerfilUsuario;
	
	/**
	 *
	 * @return the string
	 */
	public function getPerfilUsuario() {
		return $this->perfilUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$perfilUsuario
	 */
	public function setPerfilUsuario($perfilUsuario) {
		$this->perfilUsuario = $perfilUsuario;
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
	public function getIdPerfilUsuario() {
		return $this->idPerfilUsuario;
	}
	
	/**
	 *
	 * @param
	 *        	$idPerfilUsuario
	 */
	public function setIdPerfilUsuario($idPerfilUsuario) {
		$this->idPerfilUsuario = $idPerfilUsuario;
		return $this;
	}
	


}
