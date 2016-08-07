<?php

namespace api\ValidCodeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * @Route("/validcode/", name="API Home")
	 */
    public function indexAction()
    {
    	
    	return $this->render('apiValidCodeBundle:Default:index.html.twig');
    	
    }
}
