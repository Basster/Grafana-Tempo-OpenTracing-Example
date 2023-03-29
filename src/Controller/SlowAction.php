<?php
declare(strict_types=1);

namespace App\Controller;


use Auxmoney\OpentracingBundle\Service\Tracing;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
final class SlowAction
{
    #[Route('/slow', name: 'slow')]
    public function __invoke(Tracing $tracing): JsonResponse
    {
        $tracing->startActiveSpan('slow-stuff');
        sleep(4);
        $tracing->finishActiveSpan();

        return new JsonResponse(['foo' => 'bar']);
    }
}
