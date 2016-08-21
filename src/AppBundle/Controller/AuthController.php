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
    	
    	$auth = $this->get('security.authentication_utils');
    	
    	$error = $auth->getLastAuthenticationError();
    	
    	$lastUsername = $auth->getLastUsername();
    	
        return $this->render('AppBundle:Auth:login.html.twig', 
        		array('last_username'=>$lastUsername, 
        				'error'=>$error));
    }

}
