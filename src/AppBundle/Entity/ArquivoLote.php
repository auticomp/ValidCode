<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * ArquivoLote
 *
 * @ORM\Table(name="arquivo_lote", indexes={@ORM\Index(name="fk_arquivo_lote_lote1_idx", columns={"ce_id_lote"})})
 * @ORM\Entity
 */
class ArquivoLote
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_importacao", type="datetime", nullable=false)
     */
    private $dtImportacao;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_arquivo", type="string", length=45, nullable=false)
     */
    private $nomeArquivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tamanho_bytes", type="bigint", nullable=false)
     */
    private $tamanhoBytes;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_arquivo_lote", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArquivoLote;

    /**
     * @var \AppBundle\Entity\Lote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ce_id_lote", referencedColumnName="id_lote")
     * })
     */
    private $ceLote;
    
    /**
     * @var blob
     * 
     * @ORM\Column(name="arquivo_importado", type="blob", nullable=true)
     */
    private $arquivoImportado;
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getDtImportacao() {
		return $this->dtImportacao;
	}
	
	/**
	 *
	 * @param \DateTime $dtImportacao        	
	 */
	public function setDtImportacao(\DateTime $dtImportacao) {
		$this->dtImportacao = $dtImportacao;
		return $this;
	}
	
	/**
	 *
	 * @return the string
	 */
	public function getNomeArquivo() {
		return $this->nomeArquivo;
	}
	
	/**
	 *
	 * @param
	 *        	$nomeArquivo
	 */
	public function setNomeArquivo($nomeArquivo) {
		$this->nomeArquivo = $nomeArquivo;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getTamanhoBytes() {
		return $this->tamanhoBytes;
	}
	
	/**
	 *
	 * @param
	 *        	$tamanhoBytes
	 */
	public function setTamanhoBytes($tamanhoBytes) {
		$this->tamanhoBytes = $tamanhoBytes;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getAtivo() {
		return $this->ativo;
	}
	
	/**
	 *
	 * @param
	 *        	$ativo
	 */
	public function setAtivo($ativo) {
		$this->ativo = $ativo;
		return $this;
	}
	
	/**
	 *
	 * @return the integer
	 */
	public function getIdArquivoLote() {
		return $this->idArquivoLote;
	}
	
	/**
	 *
	 * @param
	 *        	$idArquivoLote
	 */
	public function setIdArquivoLote($idArquivoLote) {
		$this->idArquivoLote = $idArquivoLote;
		return $this;
	}
	
	/**
	 *
	 * @return the Lote
	 */
	public function getCeLote() {
		return $this->ceLote;
	}
	
	/**
	 *
	 * @param
	 *        	$ceLote
	 */
	public function setCeLote($ceLote) {
		$this->ceLote = $ceLote;
		return $this;
	}
	
	/**
	 *
	 * @return the blob
	 */
	public function getArquivoImportado() {
		return $this->arquivoImportado;
	}
	
	/**
	 *
	 * @param
	 *        	$arquivoImportado
	 */
	public function setArquivoImportado(UploadedFile $arquivoImportado) {
		
		if(!$arquivoImportado->isValid() || !$arquivoImportado->isReadable()){
			throw new Exception("O arquivo nao pode ser salvo!Verifique as permissoes!");
		}
		
		//Configuro o Nome
		$this->setNomeArquivo($arquivoImportado->getClientOriginalName());
		
		//Configuro o tamanho
		$this->setTamanhoBytes($arquivoImportado->getSize());
		
		$data = new \DateTime();
		//Pego a data de importacao
		$this->setDtImportacao($data);
		
		//Deixo o arquivo ativo
		$this->setAtivo(1);
		$fileLoad = "";
		
		//renderizo o arquivo como binary para armazenar no banco
		$handleFile = fopen($arquivoImportado->getRealPath(), 'rw');
		while(($line = fgets($handleFile)) !== false){
			$fileLoad .= $line;
		}
		fclose($handleFile);
		
		$this->arquivoImportado =  $fileLoad;
		return $this;
	}
	
	


}

