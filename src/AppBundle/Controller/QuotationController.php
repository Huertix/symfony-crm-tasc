<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Quotation;
use AppBundle\Entity\Quotation_exp;


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

  /**
   * @Route("/quotations/{number}", name="quotations_show")
   */
  public function showAction($number) {


    $number = str_pad($number, 10, ' ', STR_PAD_LEFT);

    $em = $this->getDoctrine()->getManager();


    //$qb = $em->createQueryBuilder();
    //
    //$qb->select('*')
    //  ->from('d_presuv', 'u')
    //  ->where('u.numero = ' . $fake_number)
    //  ->orderBy('u.linia', 'ASC');
    //
    //$query = $qb->getQuery();
    //
    //$quotation_exp = $query->getArrayResult();

    //$quotation_exp = $em->getRepository('AppBundle\Entity\Quotation_exp')
    //  ->findBy(array('numero' => $number));

    //$quotation_exp = $em->find('AppBundle\Entity\Quotation_exp', $number);

    $quotation_exp = $em->getRepository('AppBundle\Entity\Quotation_exp')->findBy(
      array('numero' => $number),
      array('linia' => 'ASC')
    );

    if (!$quotation_exp) {
      throw $this->createNotFoundException('No data for this number');
    }

    return $this->render('quotations/quotation.html.twig', [
      'quotations_exp' => $quotation_exp

    ]);
  }
}