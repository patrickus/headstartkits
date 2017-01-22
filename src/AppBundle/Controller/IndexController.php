<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        $serializer = $this->get('serializer');
        $repository = $this->get('doctrine_mongodb')->getRepository('AppBundle:Kit');
        $headerKits = $repository->findBy(['default' => true]);
        $products   = $repository->findAll();
        $repository = $this->get('doctrine_mongodb')->getRepository('AppBundle:Category');
        $categories = $repository->findAll();

        return $this->render('hsk/home.html.twig',
            [
                'props'      => $serializer->serialize($headerKits, 'json'),
                'categories' => $serializer->serialize($categories, 'json'),
                'products'   => $serializer->serialize($products, 'json'),
            ]
        );
    }
}
