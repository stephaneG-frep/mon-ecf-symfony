<?php

namespace App\Controller\Admin;

use App\Entity\Moteur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MoteurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Moteur::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
