<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class AuthController extends Controller
{
    /**
     * @Route("/Login", name="login")
     */
    public function LoginAction(Request $request)
    {
    	
    	$authUtils = $this->get('security.authentication_utils');
    	
    	$error = $authUtils->getLastAuthenticationError();
    	
    	$lastUsername = $authUtils->getLastUsername();
    	
    	
    	if($request->isMethod("POST") == true){
    		print_r($request); die;
    	}
    	
        return $this->render('AppBundle:Auth:login.html.twig', array(
        	'last_username' => $lastUsername,
        	'error' => $error
        ));
    }
    
    
    /**
     * @Route("/forgot", name="forgot")
     * @param Request $request
     */
    public function ForgotAction(Request $request)
    {
    	return $this->render('AppBundle:Auth:forgot.html.twig');
    }
    

}
