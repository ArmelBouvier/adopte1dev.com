<?php

namespace App\Controller\Admin;

use App\Entity\Benefit;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BenefitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Benefit::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Avantages')
            ->setEntityLabelInSingular('Avantage')
            ->setEntityLabelInPlural('Avantages')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new ('id')->onlyOnIndex(),
            TextField::new ('name')->setLabel('Type d\'avantage'),
            TextField::new ('logo')->setLabel('Logo associé'),
        ];
    }
}
