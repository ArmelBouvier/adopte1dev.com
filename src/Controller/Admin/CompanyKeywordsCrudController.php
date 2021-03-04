<?php

namespace App\Controller\Admin;

use App\Entity\CompanyKeywords;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CompanyKeywordsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CompanyKeywords::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
