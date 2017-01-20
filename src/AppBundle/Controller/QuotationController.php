<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Quotation;


class QuotationController extends Controller
{
    /**
     * @Route("/quotations", name="quotations_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quotations = $em->getRepository('AppBundle\Entity\Quotation')
            ->findAll();


        return $this->render('quotations/list.html.twig', [
            'quotations' => $quotations
        ]);

    }
}