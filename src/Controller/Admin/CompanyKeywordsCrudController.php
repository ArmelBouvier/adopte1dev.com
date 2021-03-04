<?php

namespace App\Controller\Admin;

use App\Entity\CompanyKeywords;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CompanyKeywordsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CompanyKeywords::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des mots-clés pour les entreprises')
            ->setEntityLabelInSingular('Mot-clé')
            ->setEntityLabelInPlural('Mots-clés')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name')->setLabel('Mot-clé'),
        ];
    }
}
