<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * HomeController
 */
class HomeController extends AbstractController
{
   /**
    * @Route("/", name="td_home")
    * @access public
    *
    * @return Response
    */
    public function home(): Response
    {
        return $this->render('home/home.html.twig');
    }
}