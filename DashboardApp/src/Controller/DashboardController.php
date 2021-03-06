<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class DashboardController extends AbstractController
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
     * @Route("/", name="dashboard")
     */
    public function index()
    {
        $users = $this->recover_all_user();

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'users' => $users
        ]);
    }



    public function recover_profile()
    {
        $this->get('security.token_storage')->getToken()->getUser();
        $user->getUsername();
    }
}
