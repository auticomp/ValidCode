<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuncUsuVip
 *
 * @ORM\Table(name="func_usu_vip", indexes={@ORM\Index(name="fk__func_usu_vip__usuarios1_idx", columns={"ce_id_usuario"}), @ORM\Index(name="fk__func_usu_vip__funcionalidade1_idx", columns={"ce_id_funcionalidade"})})
 * @ORM\Entity
 */
class FuncUsuVip
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_func_usu_vip", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFuncUsuVip;

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
     * @var \AppBundle\Entity\Funcionalidade
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Funcionalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_funcionalidade", referencedColumnName="id_funcionalidade")
     * })
     */
    private $ceFuncionalidade;


}

