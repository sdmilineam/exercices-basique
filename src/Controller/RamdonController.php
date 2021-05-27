<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RamdonController extends AbstractController
{
    /**
     * @Route("/", name="app_ramdon_index")
     */
    public function index(): Response
    {
        return $this->render('ramdon/index.html.twig', [
        ]);
    }

    /**
     * @Route("/ramdon", name="app_ramdon_ramdon")
     */
    public function ramdon(): Response
    {
        $number = rand(0, 100);

        return $this->render('ramdon/ramdon.html.twig', [
            'number' => $number,
        ]);
    }
}
