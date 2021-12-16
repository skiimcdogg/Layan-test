<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompanieRepository;

class CompaniesController extends AbstractController
{
    /**
     * @Route("/companies", name="companies")
     */
    public function index(CompanieRepository $companieRepository): Response
    {
        $companies = $companieRepository->findAll();

        return $this->render('companies/index.html.twig', compact('companies'));
    }
}
