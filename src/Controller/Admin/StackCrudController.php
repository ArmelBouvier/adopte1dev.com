<?php

namespace App\Controller\Admin;

use App\Entity\Stack;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StackCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stack::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des éléments de stack')
            ->setEntityLabelInSingular('Stack')
            ->setEntityLabelInPlural('Stacks')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new ('id')->onlyOnIndex(),
            TextField::new ('name')->setLabel('Nom de la technologie'),
            TextField::new ('logo')->setLabel('Logo'),
        ];
    }
}
