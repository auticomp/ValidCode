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


}

