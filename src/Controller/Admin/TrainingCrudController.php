<?php

namespace App\Controller\Admin;

use App\Entity\Training;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TrainingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Training::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des formations')
            ->setEntityLabelInSingular('Formation')
            ->setEntityLabelInPlural('Formations')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('siteName')->setLabel('Nom de la ressource'),
            TextField::new('url'),
            ChoiceField::new ('sponsored')->setChoices([
                'Oui' => 'Oui',
                'Non' => 'Non'])->setLabel('Sponsorisé ?'),
            ChoiceField::new ('category')->setChoices([
                'Généraliste' => 'Généraliste',
                'Back-end' => 'Back-end',
                'Front-end' => 'Front-end',
                'Autre' => 'Autre'])->setLabel('Catégories')->allowMultipleChoices(),
            AssociationField::new ('techs')->setLabel('Technologies'),
            ChoiceField::new ('specifications')->setChoices([
                'Français' => 'Français',
                'Anglais' => 'Anglais',
                'Payant' => 'Payant',
                'PDF disponible' => 'PDF'])->setLabel('Spécifications')->allowMultipleChoices(),
            DateTimeField::new ('created_at')->setLabel('Créée le :'),
        ];
    }
}
