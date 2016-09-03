<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuncionalidadeModuloUsuario
 *
 * @ORM\Table(name="funcionalidade_modulo_usuario", uniqueConstraints={@ORM\UniqueConstraint(name="uk_func_mod_user", columns={"ce_id_funcionalidade", "ce_id_modulo", "ce_id_perfil"})}, indexes={@ORM\Index(name="fk_funcionalidade_modulo_usuario__funcionalidade1_idx", columns={"ce_id_funcionalidade"}), @ORM\Index(name="fk_funcionalidade_modulo_usuario__modulo1_idx", columns={"ce_id_modulo"}), @ORM\Index(name="fk_funcionalidade_modulo_usuario__perfil_usuario1_idx", columns={"ce_id_perfil"})})
 * @ORM\Entity
 */
class FuncionalidadeModuloUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="visualizar", type="integer", nullable=true)
     */
    private $visualizar;

    /**
     * @var integer
     *
     * @ORM\Column(name="editar", type="integer", nullable=true)
     */
    private $editar;

    /**
     * @var integer
     *
     * @ORM\Column(name="excluir", type="integer", nullable=true)
     */
    private $excluir;

    /**
     * @var integer
     *
     * @ORM\Column(name="incluir", type="integer", nullable=true)
     */
    private $incluir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=true)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_func_mod_user", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFuncModUser;

    /**
     * @var \AppBundle\Entity\PerfilUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PerfilUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_perfil", referencedColumnName="id_perfil_usuario")
     * })
     */
    private $cePerfil;

    /**
     * @var \AppBundle\Entity\Modulo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $ceModulo;

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

