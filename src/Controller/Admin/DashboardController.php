<?php

namespace App\Controller\Admin;

use  App\Entity\Admin;
use App\Entity\Acheteur;
use App\Entity\Arrive;
use App\Entity\Categorie;
use App\Entity\Marque;
use App\Entity\Moteur;
use App\Entity\Vehicule;
use App\Entity\Vente;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');

        return $this->render('admin/dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('My Project Directory');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Marque', 'fas fa-list', Marque::class);
        yield MenuItem::linkToCrud('Categorie', 'fas fa-list', Categorie::class);
        yield MenuItem::linkToCrud('Moteur', 'fas fa-list', Moteur::class);
        yield MenuItem::linkToCrud('Arrive', 'fas fa-list', Arrive::class);
        yield MenuItem::linkToCrud('Vente', 'fas fa-list', Vente::class);
        yield MenuItem::linkToCrud('Acheteur', 'fas fa-list', Acheteur::class);
        yield MenuItem::linkToCrud('Vehicule', 'fas fa-list', Vehicule::class);
        yield MenuItem::linkToCrud('Admin','fa fa-user', Admin::class);
    }
}
