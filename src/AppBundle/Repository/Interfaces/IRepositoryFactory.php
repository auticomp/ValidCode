<?php
namespace AppBundle\Repository\Interfaces;


use Doctrine\ORM\Mapping\Entity;

interface IRepositoryFactory {
	
	
	function SelecioneTodos();
	
	function SelecioneApenasUm();
	
	function Salvar($entity);
	
	function Atualizar($entity);
	
	function Excluir($id);
	
	function jaExiste($id);
	
}