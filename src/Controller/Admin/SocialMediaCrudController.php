<?php

namespace App\Controller\Admin;

use App\Entity\SocialMedia;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class SocialMediaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SocialMedia::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            AssociationField::new('company'),
            ChoiceField::new('type')->setChoices([
                'Facebook' => 'facebook', 
                'Twitter' => 'twitter',
                'LinkedIn' => 'linkedin',
                'Instagram' => 'instagram',
                'Youtube' => 'youtube',
                'Pinterest' => 'pinterest',
                'TikTok' => 'toktok',
                'Twitch' => 'twitch',
                'Dribbble' => 'dribbble',
                'Github' => 'github',
                'Gitlab' => 'gitlab',                
                ]),
            Urlfield::new('url'),
            DateTimeField::new('createdAt'),
        ];
    }
}
