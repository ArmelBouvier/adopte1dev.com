<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use App\Entity\News;
use App\Entity\User;
use App\Entity\Stack;
use App\Entity\Benefit;
use App\Entity\Company;
use App\Entity\Feature;
use App\Entity\Package;
use App\Entity\Position;
use App\Entity\Training;
use App\Entity\Coworking;
use App\Entity\Technology;
use App\Entity\SocialMedia;
use App\Entity\CompanyKeywords;
use App\Repository\JobRepository;
use App\Repository\UserRepository;
use App\Repository\CompanyRepository;
use App\Repository\PackageRepository;
use App\Repository\TrainingRepository;
use App\Repository\CoworkingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    protected $userRepository;
    protected $companyRepository;
    protected $jobRepository;
    protected $trainingRepository;
    protected $coworkingRepository;
    protected $packageRepository;

    public function __construct(
        UserRepository $userRepository,
        CompanyRepository $companyRepository,
        JobRepository $jobRepository,
        TrainingRepository $trainingRepository,
        CoworkingRepository $coworkingRepository,
        PackageRepository $packageRepository
    )
    {
        $this->UserRepository = $userRepository;
        $this->CompanyRepository = $companyRepository;
        $this->JobRepository = $jobRepository;
        $this->TrainingRepository = $trainingRepository;
        $this->CoworkingRepository = $coworkingRepository;
        $this->PackageRepository = $packageRepository;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('bundles/easyAdminBundle/welcome.html.twig', [
            'countAllUsers' => $this->UserRepository->countAllUsers(),
            'countAllJobs' => $this->JobRepository->countAllJobs(),
            'countAllCompanies' => $this->CompanyRepository->countAllCompanies(),
            'countAllTrainings' => $this->TrainingRepository->countAllTrainings(),
            'countAllCoworkings' => $this->CoworkingRepository->countAllCoworkings(),
            'countAllPackages' => $this->PackageRepository->countAllPackages(),
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Adopte1dev.com');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Accès');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-users', User::class);

        yield MenuItem::section('Actuces');
        yield MenuItem::linkToCrud('News', 'fa fa-news', News::class);

        yield MenuItem::section('Entreprises');
        yield MenuItem::linkToCrud('Entreprises', 'fa fa-building', Company::class);
        yield MenuItem::linkToCrud('Réseaux sociaux', 'fa fa-at', SocialMedia::class);
        yield MenuItem::linkToCrud('Mots-clés', 'fa fa-tag', CompanyKeywords::class);

        yield MenuItem::section('Offres d\'emploi');
        yield MenuItem::linkToCrud('Offres d\'emploi', 'fa fa-laptop-code', Job::class);
        yield MenuItem::linkToCrud('Technologies', 'fa fa-file-code', Technology::class);
        yield MenuItem::linkToCrud('Stack', 'fa fa-server', Stack::class);
        yield MenuItem::linkToCrud('Type de poste', 'fa fa-users-cog', Position::class);
        yield MenuItem::linkToCrud('Perks', 'fa fa-glass-cheers', Benefit::class);

        yield MenuItem::section('Ressources pratiques');
        yield MenuItem::linkToCrud('Formation', 'fa fa-graduation-cap', Training::class);
        yield MenuItem::linkToCrud('Coworking', 'fa fa-building', Coworking::class);

        yield MenuItem::section('Nos packs');
        yield MenuItem::linkToCrud('Package', 'fa fa-box', Package::class);
        yield MenuItem::linkToCrud('Feature', 'fa fa-gift', Feature::class);
    }
}
