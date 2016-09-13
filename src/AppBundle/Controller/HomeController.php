<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        
        $sidebar_title = 'inicio';
        $sidebar_elements = array(
            1 => array(
                'link' => '/clients',
                'name' => 'clientes'
            ),
            2 => array(
                'link' => '/articles',
                'name' => 'artículos'
            ),
            3 => array(
                'link' => '/quotations',
                'name' => 'presupuestos'
            )
        );
        
        
        return $this->render('home.html.twig', array( 
            'sidebar_title'     => $sidebar_title,
            'sidebar_elements'  => $sidebar_elements,
            'content'           => 'Bienvenido a CRM TASC'               
            ));

    }
}