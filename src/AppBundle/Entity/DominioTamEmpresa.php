<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioTamEmpresa
 *
 * @ORM\Table(name="dominio_tam_empresa")
 * @ORM\Entity
 */
class DominioTamEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="tamanho_empresa", type="string", length=45, nullable=true)
     */
    private $tamanhoEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_tam_empresa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioTamEmpresa;


}

