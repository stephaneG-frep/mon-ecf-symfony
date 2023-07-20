<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
  #[Route('/home', name: 'app_home')]
  public function index(): Response
    {
        return $this->render('service/service.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
