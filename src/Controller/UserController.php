<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index", methods={"GET"})
     */
    public function index(): Response
    {
        $Users = $this->getDoctrine()->getRepository(User::class)->findall();

        return $this->render('back/index.html.twig', [
            'users' => $Users,
        ]);
    }
}
