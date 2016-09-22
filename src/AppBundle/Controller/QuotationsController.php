<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuotationsController extends Controller
{
    /**
     * @Route("/quotations", name="quotations")
     */
    public function indexAction()
    {

        $repository = $this->getDoctrine()
                ->getRepository(
                    'AppBundle:Quotation'
                );

        $quotations = $repository->findAll();

        $sidebar_elements = array();
        foreach ($quotations as $quotation ) {

            $number = $quotation->getNumero();
            $number = trim($number);
            $client = $quotation->getCliente();

            array_push($sidebar_elements, array(
                'link' => "/getquotation/$number",
                'name' => $number
            ));
        }

        $sidebar_title = 'Presupuestos';

        return $this->render('home.html.twig', array( 
            'sidebar_title'     => $sidebar_title,
            'sidebar_elements'  => $sidebar_elements,
            'content'           => 'Bienvenido a CRM TASC'               
            ));

    }

    /**
     * @Route("/getquotation/{number}")
     */
    public function getQuotationbyNumberAction($number) {

        $repository = $this->getDoctrine()
            ->getRepository(
                'AppBundle:Quotation'
            );


        $quotation = $repository->find('    ' . $number);


        $number = $quotation->getNumero();
        $client = $quotation->getCliente();

        return $this->render('home.html.twig', array(
            'sidebar_title'     => $number,
            'sidebar_elements'  => '',
            'content'           => $client
        ));

    }


}