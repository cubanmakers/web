<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/who_are_we", name="default")
     */
    public function whoAreWe()
    {
        return $this->render('default/who_are_we.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/social", name="default")
     */
    public function social()
    {
        return $this->render('default/social.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/policy", name="default")
     */
    public function policy()
    {
        return $this->render('default/policy.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
