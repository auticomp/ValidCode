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
    	print_r($request->getMethod());
    	if($request->isMethod('POST')){
    		
    		echo "POST po";
    		die;
    	}
    	
        return $this->render('AppBundle:Auth:login.html.twig', array('login'=>'', 'password'=>''));
    }

}
