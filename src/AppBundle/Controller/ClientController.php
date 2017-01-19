<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Client;

class ClientController extends Controller
{
  /**
   * @Route("/clients", name="clients_list")
   */
  public function listAction()
  {
    $em = $this->getDoctrine()->getManager();

    $clients = $em->getRepository('AppBundle\Entity\Client')
      ->findAll();

    return $this->render('clients/list.html.twig', [
      'clients' => $clients
    ]);

  }

  /**
   * @Route("/clients/{clientCode}", name="clients_show")
   */
  public function showAction($clientCode) {

    $em = $this->getDoctrine()->getManager();
    $client = $em->getRepository('AppBundle:Client')
      ->findOneBy(['codigo' => $clientCode]);

    if (!$client) {
      throw $this->createNotFoundException('Cliente no Encontrado');
    }


    return $this->render('clients/show.html.twig', [
      'client' => $client
    ]);
  }
}
