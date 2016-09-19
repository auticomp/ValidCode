<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LicencaEmprDisp
 *
 * @ORM\Table(name="licenca_empr_disp", indexes={@ORM\Index(name="fk__licenca_empr_disp__dispositivo1_idx", columns={"ce_id_dispositivo"}), @ORM\Index(name="fk__licenca_empr_disp__licenca_uso1_idx", columns={"ce_id_licenca"}), @ORM\Index(name="fk__licenca_empr_disp__empresas1_idx", columns={"ce_id_empresa"})})
 * @ORM\Entity
 */
class LicencaEmprDisp
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_inicio_utilizacao", type="datetime", nullable=true)
     */
    private $dtInicioUtilizacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_licenca_empr_disp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLicencaEmprDisp;

    /**
     * @var \AppBundle\Entity\LicencaUso
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\LicencaUso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_licenca", referencedColumnName="id_licenca_uso")
     * })
     */
    private $ceLicenca;

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
     * @var \AppBundle\Entity\Dispositivo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dispositivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_dispositivo", referencedColumnName="id_dispositivo")
     * })
     */
    private $ceDispositivo;
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtInicioUtilizacao() {
		return $this->dtInicioUtilizacao;
	}
	
	/**
	 *
	 * @param \DateTime $dtInicioUtilizacao        	
	 */
	public function setDtInicioUtilizacao(\DateTime $dtInicioUtilizacao) {
		$this->dtInicioUtilizacao = $dtInicioUtilizacao;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdLicencaEmprDisp() {
		return $this->idLicencaEmprDisp;
	}
	
	/**
	 *
	 * @param
	 *        	$idLicencaEmprDisp
	 */
	public function setIdLicencaEmprDisp($idLicencaEmprDisp) {
		$this->idLicencaEmprDisp = $idLicencaEmprDisp;
		return $this;
	}
	
	/**
	 *
	 * @return the LicencaUso
	 */
	public function getCeLicenca() {
		return $this->ceLicenca;
	}
	
	/**
	 *
	 * @param
	 *        	$ceLicenca
	 */
	public function setCeLicenca($ceLicenca) {
		$this->ceLicenca = $ceLicenca;
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
	
	/**
	 *
	 * @return the Dispositivo
	 */
	public function getCeDispositivo() {
		return $this->ceDispositivo;
	}
	
	/**
	 *
	 * @param
	 *        	$ceDispositivo
	 */
	public function setCeDispositivo($ceDispositivo) {
		$this->ceDispositivo = $ceDispositivo;
		return $this;
	}
	


}

