<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DominioCategoriaDisp
 *
 * @ORM\Table(name="dominio_categoria_disp")
 * @ORM\Entity
 */
class DominioCategoriaDisp
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoria_disp", type="string", length=45, nullable=false)
     */
    private $categoriaDisp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dominio_categoria_disp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDominioCategoriaDisp;


}

