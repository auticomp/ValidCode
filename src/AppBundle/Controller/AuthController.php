<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuarios;

class AuthController extends Controller
{
    /**
     * @Route("/Login", name="login")
     */
    public function LoginAction(Request $request)
    {
    	
    	$auth = $this->get('security.authentication_utils');
    	
    	$error = $auth->getLastAuthenticationError();
    	
    	$lastUsername = $auth->getLastUsername();
    	
    	//$user = $this->isUsuario($lastUsername, '123');
    	
        return $this->render('AppBundle:Auth:login.html.twig', 
        		array(
        				'last_username'=>$lastUsername, 
        				'error'=>$error)
        		);
    }
    
    
    private function isUsuario($username, $password){
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$conditional = array('emailUsuario' => $username, 'senhaUsuario' => $password);
    	
    	$usuario = $em->getRepository('AppBundle:Usuarios')->findBy($conditional); 
    	
    	print_r($usuario);
    	
    }

}
