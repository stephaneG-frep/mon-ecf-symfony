<?php

namespace App\Controller\Admin;

use App\Entity\Vehicule;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class VehiculeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vehicule::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        //yield from parent::configureFields($pageName);


        yield TextField::new('Titre');

        yield TextField::new('Annee');
        yield TextField::new('Kilometre');
        yield TextField::new('Prix');

        yield TextareaField::new('imageFile')->setFormType(VichImageType::class)->hideOnIndex();
        yield ImageField::new('imageName')->setBasePath('/images/vehicules')->hideOnForm();

        yield AssociationField::new('marque');
        yield AssociationField::new('moteur');
        yield AssociationField::new('categorie');
        yield AssociationField::new('arrive');
        yield AssociationField::new('vente');
        yield AssociationField::new('acheteur');
    }   
}
