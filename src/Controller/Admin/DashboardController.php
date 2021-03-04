<?php

namespace App\Controller\Admin;

use App\Entity\Company;
use App\Entity\CompanyKeywords;
use App\Entity\Job;
use App\Entity\SocialMedia;
use App\Entity\User;
use App\Repository\CompanyRepository;
use App\Repository\JobRepository;
use App\Repository\UserRepository;
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

    public function __construct(
        UserRepository $userRepository,
        CompanyRepository $companyRepository,
        JobRepository $jobRepository
    )

    {
        $this->UserRepository = $userRepository;
        $this->CompanyRepository = $companyRepository;
        $this->JobRepository = $jobRepository;
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

        yield MenuItem::section('Entreprises');
        yield MenuItem::linkToCrud('Entreprises', 'fa fa-building', Company::class);
        yield MenuItem::linkToCrud('Réseaux sociaux', 'fa fa-at', SocialMedia::class);
        yield MenuItem::linkToCrud('Mots-clés', 'fa fa-tag', CompanyKeywords::class);

        yield MenuItem::section('Offres d\'emploi');
        yield MenuItem::linkToCrud('Offres d\'emploi', 'fa fa-laptop-code', Job::class);

    }
}
