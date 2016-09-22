<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends Controller
{
    /**
     * @Route("/articles", name="articles")
     */
    public function indexAction() {

        $repository = $this->getDoctrine()
                ->getRepository(
                    'AppBundle:Article'
                );

        $articles = $repository->findAll();

        $sidebar_elements = array();
        foreach ($articles as $article ) {

            $code = $article->getCodigo();
            $nombre = $article->getNombre();

            array_push($sidebar_elements, array(
                'link' => "/getarticle/$code",
                'name' => $code
            ));
        }

        $sidebar_title = 'articulos';

        return $this->render('home.html.twig', array( 
            'sidebar_title'     => $sidebar_title,
            'sidebar_elements'  => $sidebar_elements,
            'content'           => 'Bienvenido a CRM TASC'               
            ));

    }

    /**
     * @Route("/getarticle/{codigo}")
     */
    public function getArticlebyCodeAction($codigo) {

        $repository = $this->getDoctrine()
            ->getRepository(
                'AppBundle:Article'
            );

        $article = $repository->find($codigo);


        $code = $article->getCodigo();
        $name = $article->getNombre();

        return $this->render('home.html.twig', array(
            'sidebar_title'     => $code,
            'sidebar_elements'  => '',
            'content'           => $name
        ));

    }


}