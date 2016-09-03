<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioTipoEmpresa
 *
 * @ORM\Table(name="dominio_tipo_empresa")
 * @ORM\Entity
 */
class DominioTipoEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_empresa", type="string", length=45, nullable=true)
     */
    private $tipoEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_tipo_empresa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioTipoEmpresa;


}

