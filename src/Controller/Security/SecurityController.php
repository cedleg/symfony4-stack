<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        return $this->render('security/users.html.twig', [
            'title' => 'Users'
        ]);
    }

    /**
     * @Route("/users/create", name="users_create")
     */
    public function create()
    {
        return $this->render('security/users_create.html.twig');
    }

    /**
     * @Route("/users/{username}/edit", name="users_edit")
     */
    public function edit()
    {
        return $this->render('security/users_edit.html.twig');
    }

    /**
     * @Route("/users/{username}/delete", name="users_delete")
     */
    public function delete()
    {
        return $this->render('security/users_delete.html.twig');
    }
}
