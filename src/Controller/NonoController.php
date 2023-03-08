<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NonoController extends AbstractController
{
    #[Route('/', name: 'app_nono')]
    public function index(): Response
    {
        return new Response(<<<E0F
            <html>
                <body>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            E0F
    );
    }
}
