<?php // src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;            
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	/**
     * @Route("/page")
     */
	public function indexAction()
	{		
		return new Response('<html><body>Page number: 123 </body></html>');
	}
}