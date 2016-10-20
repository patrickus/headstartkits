<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Document\Product;
use AppBundle\Document\Kit;
use AppBundle\Document\Category;
use AppBundle\Form\ProductType;


class AdminController extends Controller
{
    /**
     * @Route("/admin/products")
     * @Template("hsk:create.html.twig")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->get('doctrine_mongodb')->getRepository('AppBundle:Kit');
        $kits = $repository->findAll();
        $serializer = $this->get('serializer');
        return $this->render('admin/products.html.twig', $serializer->normalize(
            ['products' => $kits]));

        /*if ($request->isMethod('post')) {
            $promotion = $request->request->get('create_product');
            $product->setName('Keyboard');
            $product->setPrice(19.99);
            $product->setSalePrice(15.99);
            $product->setDescription('Ergonomic and stylish!');
            $product->setImages([]);
            $product->setQuantityAvailable(20);
            $product->setNumberSold(20);
            $product->setTags([]);
        }

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();*/
        //return new Response('Saved new product with id '.$product->getId());
    }

    /**
     * @Route("/admin/create-kit")
     *
     */
    public function createKitAction(Request $request)
    {
        $kit = new Kit();

        $kit->setName('Puppy Pack');
        $kit->setDescription('Ergonomic and stylish!');
        $kit->setPrice(19.99);
        $kit->setSalePrice(15.99);
        $kit->setDefault(false);
        $kit->setImage('');
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($kit);
        $dm->flush();

        return new Response('Created kit with id: '.$kit->getId());
        //$form      = $this->createForm(ProductType::class);
        //return $this->render('admin/create.html.twig', ['form' => $form->createView()]);

        /*if ($request->isMethod('post')) {
            $promotion = $request->request->get('create_product');
            $product->setName('Keyboard');
            $product->setPrice(19.99);
            $product->setSalePrice(15.99);
            $product->setDescription('Ergonomic and stylish!');
            $product->setImages([]);
            $product->setQuantityAvailable(20);
            $product->setNumberSold(20);
            $product->setTags([]);
        }

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();*/
        //return new Response('Saved new product with id '.$product->getId());
    }

    /**
     * @Route("/admin/create-product")
     * @Template("hsk:create.html.twig")
     */
    public function createProductAction(Request $request)
    {
        $repository = $this->get('doctrine_mongodb')->getRepository('AppBundle:Kit');
        $kits       = $repository->findAll();
        $product    = new Product();

        $form       = $this->createForm(ProductType::class, ['data' => $kits,]);

        if ($request->isMethod('post')) {
            $productInfo = $request->request->get('product');
            $product = new Product();
            $product->setName($productInfo['name']);
            $product->setKitId($productInfo['kitId']);
            $product->setPrice($productInfo['price']);
            $product->setDescription($productInfo['description']);
            $product->setImage($productInfo['image']);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();
        }

        return $this->render('admin/create.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/admin/add-categories")
     * @Template("hsk:create.html.twig")
     */
    public function addCategoriesAction(Request $request)
    {
        $repository = $this->get('doctrine_mongodb')->getRepository('AppBundle:Category');
        $categoryNames = ['Pets', 'Student', 'Kids', 'Sports', 'Beauty', 'Outdoors'];
        foreach($categoryNames as $key){
            $category    = new Category();
            $category->setName($key);
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($category);
        }
        $dm->flush();

        return new Response('Added all Categories ');
    }


}
