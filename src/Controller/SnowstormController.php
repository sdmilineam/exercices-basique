<?php

namespace App\Controller;

use App\Repository\SnowflakeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SnowstormController extends AbstractController
{
    /**
     * @Route("/snowstorm", name="app_snowstorm_index")
     */
    public function index(SnowflakeRepository $snowflakeRepository): Response
    {
        $snowflake = $snowflakeRepository->findAll();

        return $this->render('snowstorm/index.html.twig', [
            'snowflake' => $snowflake,
        ]);
    }

    /**
     * @Route("/snowflake/{id}", name="app_snowflake_snowflake")
     *
     * @param mixed $id
     */
    public function snowflake(SnowflakeRepository $snowflakeRepository, $id): Response
    {
        $snowflake = $snowflakeRepository->find($id);

        return $this->render('snowflake/snowflake.html.twig', [
            'snowflake' => $snowflake,
        ]);
    }
}
