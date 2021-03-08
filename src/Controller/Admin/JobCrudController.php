<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class JobCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Job::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des offres d\'emploi')
            ->setEntityLabelInSingular('Job')
            ->setEntityLabelInPlural('Jobs')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new ('id')->onlyOnIndex(),
            TextField::new ('title')->setLabel('Intitulé de l\'offre d\'emploi'),
            TextField::new ('subTitle')->setLabel('Sous-titre')->hideOnIndex(),
            TextField::new ('methodology')->setLabel('Méthode de travail')->hideOnIndex(),
            AssociationField::new ('technologies')->setLabel('Technologies'),
            AssociationField::new ('stack')->setLabel('Stack'),
            AssociationField::new ('position')->setLabel('Type de poste'),
            TextEditorField::new ('jobDescription')->setLabel('Description de l\'offre d\'emploi')->hideOnIndex(),
            TextEditorField::new ('jobMissions')->setLabel('Missions confiées')->hideOnIndex(),
            TextEditorField::new ('candidateProfile')->setLabel('Profil du candidat recherché')->hideOnIndex(),
            ChoiceField::new ('seniority')->setChoices([
                'Débutant' => 'Débutant',
                'Junior' => 'Junior',
                'Confirmé' => 'Confirmé',
                'Senior' => 'Senior'])->setLabel('Niveau d\'expérience requis'),
            TextEditorField::new ('miscellaneous')->setLabel('Informations complémentaires')->hideOnIndex(),
            TextField::new ('location')->setLabel('Lieu de travail'),
            ChoiceField::new ('contract')->setChoices([
                'CDI' => 'CDI',
                'CDD' => 'CDD',
                'Freelance' => 'Frelance',
                'Stage' => 'Stage'])->setLabel('Type de contrat'),
            ChoiceField::new ('remote')->setChoices([
                'Présentiel' => 'Présentiel',
                'Télétravail partiel' => 'Télétravail partiel',
                'Télétravail total' => 'Télétravail total'])->allowMultipleChoices()->setLabel('Ouverte au télétravail ?'),
            ChoiceField::new ('recruiting')->setChoices([
                'Non' => 'Non',
                'Partiel' => 'Partiel',
                'Oui' => 'Oui'])->allowMultipleChoices()->setLabel('Recrutement à distance ?'),
            TextField::new ('salary')->setLabel('Salaire'),
            TextField::new ('applyAddress')->setLabel('Email pour candidater'),
            AssociationField::new ('perks')->setLabel('Avantages'),
            AssociationField::new ('company')->setLabel('Entreprise'),
            DateTimeField::new ('created_at')->setLabel('Créée le :'),
        ];
    }
}
