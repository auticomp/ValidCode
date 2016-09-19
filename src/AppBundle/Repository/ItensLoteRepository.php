<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\ItensLote;


class ItensLoteRepository extends EntityRepository 
{
		private $itensLoteContext;
		
		
		/**
		 * 
		 * @param unknown $em
		 * @param string $class
		 */
		public function __construct($em, $class = 'AppBundle\ItensLote'){
			$this->_em = $em;
		}
		
		/**
		 * 
		 * @param unknown $dados_do_arquivo
		 */
		public function getItensToLoadFromFile($dados_do_arquivo, $idLote){
			
			$v_lines = explode("\n", $dados_do_arquivo);
			$size = count($v_lines);

			
			try {
			
				if($size == 0)
					throw new \Exception("O arquivo nao contem dados! Abortando Importacao!");
				
				for($i=0;$i<$size;$i++)
				{
					$itens = explode("|", $v_lines[$i]);
					if($itens[0]!="item"){
						
						$itensLote = new ItensLote();
				
						//Converto a data em string para DateTime
						$dtColeta = new \DateTime();
						$dtColeta->createFromFormat('Ymd', $itens[3]);
				
						$itensLote->setCeLote($idLote);
						$itensLote->setDescricao($itens[1]);
						$itensLote->setNroCodigoBarra($itens[2]);
						$itensLote->setDtColeta($dtColeta);
				
						$this->_em->persist($itensLote);
					}
				}	
				$this->_em->flush();
				
			} catch (\Exception $ex){
				throw $ex;
			}
			
		}
}