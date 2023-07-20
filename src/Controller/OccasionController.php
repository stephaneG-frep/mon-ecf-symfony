<?php

namespace App\Controller;


use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class OccasionController extends AbstractController
{

    #[Route('/occasion', name: 'occasion')]
    
    #[Route('/', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('occasion/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll([], ['categoryOrder' => 'asc']),
        ]);
    }

    #[Route('/{id}', name: 'app_vehicule_index', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }
}
