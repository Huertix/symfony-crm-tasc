<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClientsController extends Controller
{
    /**
     * @Route("/clients", name="clients")
     */
    public function indexAction()
    {

        $repository = $this->getDoctrine()
                ->getRepository(
                    'AppBundle:Client'
                );

        $clients = $repository->findAll();

        $sidebar_elements = array();
        foreach ($clients as $client ) {

            $code = $client->getCodigo();
            $nombre = $client->getNombre();

            array_push($sidebar_elements, array(
                'link' => "/getclient/$code",
                'name' => $nombre
            ));
        }

        $sidebar_title = 'clientes';

        return $this->render('home.html.twig', array( 
            'sidebar_title'     => $sidebar_title,
            'sidebar_elements'  => $sidebar_elements,
            'content'           => 'Bienvenido a CRM TASC'               
            ));

    }

    /**
     * @Route("/getclient/{codigo}")
     */
    public function getClientbyCodeAction($codigo) {
        $repository = $this->getDoctrine()
            ->getRepository(
                'AppBundle:Client'
            );

        $client = $repository->find($codigo);


        $code = $client->getCodigo();
        $name = $client->getNombre();

        return $this->render('home.html.twig', array(
            'sidebar_title'     => $code,
            'sidebar_elements'  => '',
            'content'           => $name
        ));

    }


}