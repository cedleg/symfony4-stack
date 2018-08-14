<?php

namespace App\Controller\Management;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MediasManagementController extends AbstractController
{
    /**
     * @Route("/medias", name="medias")
     */
    public function index()
    {
        return $this->render('medias/index.html.twig', [
            'title' => 'Gestion de contenus',
        ]);
    }
}
