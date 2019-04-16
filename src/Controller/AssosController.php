<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AssosController extends AbstractController
{

    /**
     * @Route("/accueil", name="accueil")
     */
    public function Accueil()
    {
        return $this->render('assos/accueil.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }


    /**
     * @Route("/assos", name="assos")
     */
    public function index()
    {
        return $this->render('assos/index.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }


    /**
     * @Route("/service", name="service")
     */
    public function home()
    {
        return $this->render('assos/services.html.twig', [
            'age' => '17',
        ]);
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('assos/connexion.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)

    {
        dump($request->request);
        return $this->render('assos/contact.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }

    /**
     * @Route("contact")
     * @return \Symfony\Component\HttpFoundation\Respon
     */
    public function ccreate()
    {
        return $this->render('assos/contact.html.twig', [
            'controller_name' => 'AssosController',
        ]);
    }


}
