<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulo
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity
 */
class Modulo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_modulo", type="string", length=45, nullable=true)
     */
    private $nomeModulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;


}

