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


}

