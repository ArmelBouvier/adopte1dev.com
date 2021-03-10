<?php

namespace App\Controller\Admin;

use App\Entity\Coworking;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CoworkingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Coworking::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des espaces de coworking')
            ->setEntityLabelInSingular('Coworking')
            ->setEntityLabelInPlural('Coworking')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('placeName')->setLabel('Nom du lieu'),
            TextField::new('siteName')->setLabel('Site internet'),
            TextField::new('address')->setLabel('Adresse physique'),
            EmailField::new('email')->setLabel('Site internet'),
            TextField::new('contactUrl')->setLabel('Formulaire de contact'),
            DateTimeField::new ('created_at')->setLabel('Créé le :'),
        ];
    }
}
