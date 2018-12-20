<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class ListController extends AbstractController
{
    public function recover_all_user()
    {
        $users = $this->getDoctrine()
            ->getManager()
            ->getRepository(User::class)
            ->findAll();

        return $users;
    }

    /**
     * @Route("/liste", name="list")
     */
    public function index()
    {
        $users = $this->recover_all_user();

        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
            'users' => $users
        ]);
    }
}
