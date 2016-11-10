<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\UsuariosRepository;
use AppBundle;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\BrowserKit\Cookie;
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
    		
    		$username = $request->request->get("_username");
    		$password = md5($request->request->get("_password"));
    		
    		$em = $this->getDoctrine()->getManager();
    		
    		$users = new UsuariosRepository($em);
    		
    		$exists = $users->loadUserByUsername($username);
    		
    		if($exists->getSenhaUsuario() == $password){

    			
    			//get session
    			$session = $request->getSession();
    			
    			//true - authenticate
    			$token = new UsernamePasswordToken($exists, $exists->getSenhaUsuario(), "security_area", array('ROLE_ADMIN'));
    			
    			//get security token an set token
    			$this->get("security.token_storage")->setToken($token);
    			
    			//add event Interactive
    			$event = new InteractiveLoginEvent($request, $token);
    			
    			//dispatcher event
    			$this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
    			
    			//set session
    			$session->set('_security_' . 'security_area', serialize($token));
    			
    			//save session
    			$session->save();
    			
    			//config cookie
    			$cookie = new Cookie($session->getName(), $session->getId());
    			//Save the cookie
    			$request->cookies->set("security", $cookie);
    			
    			//redirect to the page
    			$this->redirect("default/index.html.twig");
    			
    			
    		}
    	} 
    	
    	
    	return $this->render('AppBundle:Auth:login.html.twig', array(
        	'last_username' => $lastUsername,
        	'error' => $error
        ));
    }
    
    /**
     * 
     * @Route("/login_check", name="login_check")
     */
    public function LoginCheckAction(Request $request){
    	
    	echo $request->getMethod();
    	die;
    	
    	
    	
    	$authUtils = $this->get('security.authentication_utils');
    	
    	$error = $authUtils->getLastAuthenticationError();
    	
    	$lastUsername = $authUtils->getLastUsername();
    	
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
