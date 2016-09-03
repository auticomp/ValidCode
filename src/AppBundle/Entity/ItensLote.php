<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItensLote
 *
 * @ORM\Table(name="itens_lote", indexes={@ORM\Index(name="fk__itens_lote__usuarios1_idx", columns={"ce_id_usuario"}), @ORM\Index(name="fk__itens_lote__lotes1_idx", columns={"ce_id_lote"})})
 * @ORM\Entity
 */
class ItensLote
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_codigo_barra", type="string", length=45, nullable=true)
     */
    private $nroCodigoBarra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_coleta", type="datetime", nullable=true)
     */
    private $dtColeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_itens_lote", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItensLote;

    /**
     * @var \AppBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $ceUsuario;

    /**
     * @var \AppBundle\Entity\Lote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_lote", referencedColumnName="id_lote")
     * })
     */
    private $ceLote;


}

