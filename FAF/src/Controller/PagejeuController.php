<?php

namespace App\Controller;

use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PagejeuRepository;
use App\Entity\Pagejeu;
use App\Form\CreationFormType;

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
     * @Route("/pages/create",name="app_pagejeu_create")
     */
    public function create(Request $request,EntityManagerInterface $em) : Response
    {
        $pagejeu = new Pagejeu();
        $form = $this->createForm(CreationFormType::class, $pagejeu);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $pagejeu->setTitle($data->getTitle());
            $pagejeu->setDescription($data->getDescription());
            $em->persist($pagejeu);
            $em->flush();

            return $this ->redirectToRoute('app_home');
        }
        return $this ->render('pagejeu/create.html.twig',[
            'monForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/pages/{id<\d>}",name="app_pagejeu_show")
     */
    public function show(Pagejeu $pagejeu): Response
    {
        return $this -> render('pagejeu/show.html.twig', compact('pagejeu'));
    }

}
