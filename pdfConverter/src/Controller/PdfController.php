<?php

namespace App\Controller;

use Knp\Snappy\GeneratorInterface;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBag;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Bundle\SnappyBundle\KnpSnappyBundle;
use Knp\Bundle\SnappyBundle\DependencyInjection\KnpSnappyExtension;
use Knp\Snappy\Pdf;

class PdfController extends AbstractController
{
    /**
     * @Route("/", name="pdf")
     */
    public function pdfAction(ContainerInterface $container)
    {

        $container->get('knp_snappy.pdf')->generate('https://remy-dev.github.io/online-cv/', 'public/pdf/cv.pdf');
        return new Response('its done');

    }
}
