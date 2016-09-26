<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionalidade
 *
 * @ORM\Table(name="funcionalidade")
 * @ORM\Entity
 */
class Funcionalidade
{
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcionalidade", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFuncionalidade;
	
	/**
	 *
	 * @return the string
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 *
	 * @param
	 *        	$url
	 */
	public function setUrl($url) {
		$this->url = $url;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getTitulo() {
		return $this->titulo;
	}
	
	/**
	 *
	 * @param
	 *        	$titulo
	 */
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
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
	public function getIdFuncionalidade() {
		return $this->idFuncionalidade;
	}
	
	/**
	 *
	 * @param
	 *        	$idFuncionalidade
	 */
	public function setIdFuncionalidade($idFuncionalidade) {
		$this->idFuncionalidade = $idFuncionalidade;
		return $this;
	}
	


}
