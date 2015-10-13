<?php // src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
	/**
	 * @Route("/hello")
	 */
    public function indexAction()
    {
        return new Response('<html><body>Hello</body></html>');
    }
}