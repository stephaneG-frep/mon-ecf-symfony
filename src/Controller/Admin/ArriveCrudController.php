<?php

namespace App\Controller\Admin;

use App\Entity\Arrive;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArriveCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Arrive::class;
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
