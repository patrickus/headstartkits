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
        $serializer = $this->get('serializer');
        return $this->render('hsk/home.html.twig',
            ['props' => $serializer->serialize($headerKits, 'json')]);
        /*return $this->render('hsk/home.html.twig', [
            'props' => $serializer->normalize(
                [
                    'name'     => 'Puppy Pack',
                    'desc'     => 'buy this thing its really cool and will help you with stuff',
                    'price'    => '350.<sup>95</sup>',
                    'baseUrl'  => $this->generateUrl('homepage'),
                    'location' => $request->getRequestUri()
                ]
            )
        ]);*/
    }
}
