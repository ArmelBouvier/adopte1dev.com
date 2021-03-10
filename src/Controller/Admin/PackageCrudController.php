<?php

namespace App\Controller\Admin;

use App\Entity\Package;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PackageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Package::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des packs')
            ->setEntityLabelInSingular('Pack')
            ->setEntityLabelInPlural('Packs')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name')->setLabel('Nom du pack'),
            TextField::new('subTitle')->setLabel('Sous-titre'),
            TextField::new('price')->setLabel('Prix'),
            TextField::new('packColor')->setLabel('Couleur du pack'),
            AssociationField::new('features')->setLabel('features associées'),
        ];
    }
}
