<?php

namespace App\Controller\Admin;

use App\Entity\Company;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class CompanyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Company::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name')->setLabel('Nom de l\'entreprise'),
            TextField::new('address')->setLabel('Adresse postale')->hideOnIndex(),
            Emailfield::new('email')->setLabel('Adresse e-mail')->hideOnIndex(),
            Urlfield::new('website')->setLabel('Site internet'),
            TextField::new('activity_area')->setLabel('Secteur d\'activité'),
            TextEditorField::new('description')->setLabel('Description de l\'entreprise')->hideOnIndex(),
            TextField::new('slogan')->hideOnIndex(),
            TextField::new('french_office')->setLabel('Adresse française (si différente adresse postale)')->hideOnIndex(),
            ChoiceField::new('remote_hiring')->setChoices([
                'Oui' => 'yes', 
                'Non' => 'No',
                'partiel' => 'partial'])->setLabel('Ouverte au télétravail ?')->hideOnIndex(),
            ChoiceField::new('work_force')->setChoices([
                '0-5' => '0-5', 
                '6-20' => '6-20',
                '20-50' => '20-50' , 
                '50-100' => '50-100',
                '100-1000' => '100-1000', 
                '1000+' => '1000+',
                ])->setLabel('Effectifs de l\'entreprise')->hideOnIndex(),
            DateTimeField::new('created_at'),
        ];
    }
}
