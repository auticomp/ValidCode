<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	
    	return $this->render('default/index.html.twig', [
    			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
    	]);
    	
    	//$session = new Session();
    	
    	
    	/* 
        if($session->get('auth') == NULL)
        {
        	return $this->redirect($this->generateUrl('auth_login'));
        	
        } else {
        	
        	return $this->render('default/index.html.twig', [
        			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        	]);
        }
         */
        
    }
    
    
    public function lotesAction(Request $request)
    {
    	
    	return $this->render('apiValidCodeBundle:Default:index.html.twig');
    	
    }
    
    
}
