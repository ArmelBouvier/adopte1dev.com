<?php

namespace App\Controller;

use App\Repository\JobRepository;
use App\Repository\NewsRepository;
use App\Repository\CompanyRepository;
use App\Repository\PartnerRepository;
use App\Repository\TestimonialRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="browse")
     */
    public function browse(
        JobRepository $jobRepository,
        CompanyRepository $companyRepository,
        NewsRepository $newsRepository,
        TestimonialRepository $testimonialRepository,
        PartnerRepository $partnerRepository
    ): Response
    {
        return $this->render('main/browse.html.twig', [
            'countAllJobs' => $jobRepository->countAllJobs(),
            'jobs' => $jobRepository->findForHomepage(),
            'countAllCompanies' => $companyRepository->countAllCompanies(),
            'news' => $newsRepository->findForHomepage(),
            'testimonials' => $testimonialRepository->findAll(),
            'partners' => $partnerRepository->findAll()
        ]);
    }

    /**
     * @Route("/change-locale/{locale}", name="change_locale")
     */
    public function changeLocale($locale, Request $request)
    {
        // On stocke la langue demandée dans la session
        $request->getSession()->set('_locale', $locale);

        // On revient sur la page précédente
        return $this->redirect($request->headers->get('referer'));
    }
}
