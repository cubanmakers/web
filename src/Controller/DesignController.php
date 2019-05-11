<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DesignController extends AbstractController
{
    /**
     * @Route("/design", name="design")
     */
    public function index()
    {
        return $this->render('design/index.html.twig', [
            'controller_name' => 'DesignController',
        ]);
    }
}
