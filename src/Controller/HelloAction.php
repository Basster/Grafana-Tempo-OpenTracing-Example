<?php
declare(strict_types=1);

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class HelloAction
{
    #[Route('/', name: 'homepage')]
    public function __invoke()
    {
        return new Response('<html><body>Hello World!</body></html>');
    }
}
