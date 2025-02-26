<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SignInController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('signin/home.html.twig');
    }

    #[Route('/email', name: 'email')]
    public function email(Request $request, SessionInterface $session): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $session->set('email', $email);
            return $this->redirectToRoute('password');
        }

        return $this->render('signin/email.html.twig');
    }

    #[Route('/password', name: 'password')]
    public function password(Request $request, SessionInterface $session): Response
    {
        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $email = $session->get('email');

            // Handle authentication logic here
            return $this->render('signin/confirmation.html.twig', [
                'email' => $email
            ]);
        }

        return $this->render('signin/password.html.twig');
    }
}
