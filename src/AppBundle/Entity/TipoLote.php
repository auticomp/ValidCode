<?php

namespace AppBundle\Entity;

/**
 * TipoLote
 */
class TipoLote
{
    /**
     * @var string
     */
    private $descrTipoLote;

    /**
     * @var integer
     */
    private $ativo = '1';

    /**
     * @var integer
     */
    private $idTipoLote;


    /**
     * Set descrTipoLote
     *
     * @param string $descrTipoLote
     *
     * @return TipoLote
     */
    public function setDescrTipoLote($descrTipoLote)
    {
        $this->descrTipoLote = $descrTipoLote;

        return $this;
    }

    /**
     * Get descrTipoLote
     *
     * @return string
     */
    public function getDescrTipoLote()
    {
        return $this->descrTipoLote;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TipoLote
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Get idTipoLote
     *
     * @return integer
     */
    public function getIdTipoLote()
    {
        return $this->idTipoLote;
    }
	
	/**
	 *
	 * @param
	 *        	$idTipoLote
	 */
	public function setIdTipoLote($idTipoLote) {
		$this->idTipoLote = $idTipoLote;
		return $this;
	}
	
}

