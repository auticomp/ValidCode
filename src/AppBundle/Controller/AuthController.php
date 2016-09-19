<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\UsuariosRepository;

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
    	
    	print_r($request->request);
    	die;
   
    	
    	if ($request->getPassword() && $request->get('email'))
    	{
    		$usuarioRepository = new UsuariosRepository($this->getDoctrine()->getManager());
    		 
    		$usuarioRepository->loadUserByUsername($lastUsername);
    		
    		
    		die('ok');
    		
    		return $this->render('default/index.html.twig', [
        			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        	]);
    		
    	}
    	
        return $this->render('AppBundle:Auth:login.html.twig', 
        		array(
        				'last_username'=>$lastUsername, 
        				'error'=>$error)
        		);
    }
    
    
    private function isUsuario($username, $password){
    	
    	
    	
    }

}
