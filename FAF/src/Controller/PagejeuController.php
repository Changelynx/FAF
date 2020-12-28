<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PagejeuRepository;
use App\Entity\Pagejeu;

class PagejeuController extends AbstractController
{
    /**
     *  @Route("/", name="app_home")
     */
    public function index(PagejeuRepository $pagejeuRepository): Response
    {
        $pages=$pagejeuRepository->findAll();
        return $this->render('pagejeu/index.html.twig', compact('pages'));
    }

    /**
     * @Route("/pages/{id<\d>}",name="app_pagejeu_show")
     */
    public function show(Pagejeu $pagejeu): Response
    {
        dd($pagejeu);
    }
}
