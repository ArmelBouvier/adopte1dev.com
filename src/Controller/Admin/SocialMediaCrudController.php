<?php

namespace App\Controller\Admin;

use App\Entity\SocialMedia;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SocialMediaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SocialMedia::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des réseaux sociaux des entreprises')
            ->setEntityLabelInSingular('Réseau social')
            ->setEntityLabelInPlural('Réseaux sociaux')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            AssociationField::new('company')->setLabel('Entreprise associée'),
            ChoiceField::new('type')->setChoices([
                'Facebbok' => 'Facebbok', 
                'Twitter' => 'Twitter',
                'Linkedin' => 'Linkedin' , 
                'Instagram' => 'Instagram',
                'Youtube' => 'Youtube', 
                'Pinterest' => 'Pinterest',
                'Tiktok' => 'Tiktok ',
                'Twitch' => 'Twitch',
                ])->setLabel('Type de réseau social'),
            TextField::new('url'),
        ];
    }
}
