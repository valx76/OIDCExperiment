<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AppController extends AbstractController
{
    #[Route('/', 'app_home')]
    public function home(): Response
    {
        return new Response(
            <<<HTML
                Home<br>
                <a href="/app">Go to app</a>
            HTML
        );
    }

    #[Route('/app')]
    #[IsGranted('ROLE_USER')]
    public function app(): Response
    {
        return new Response(
            <<<HTML
                App<br>
                <a href="/logout">Logout</a>
            HTML
        );
    }
}