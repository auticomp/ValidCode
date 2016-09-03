<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioMarcaDisp
 *
 * @ORM\Table(name="dominio_marca_disp")
 * @ORM\Entity
 */
class DominioMarcaDisp
{
    /**
     * @var string
     *
     * @ORM\Column(name="marca_dispositivo", type="string", length=45, nullable=false)
     */
    private $marcaDispositivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_marca_disp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioMarcaDisp;


}

