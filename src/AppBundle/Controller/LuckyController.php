<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky")
     */
    public function numberAction(Request $request)
    {
        $number = rand(0, 100);

        return new Response(
        	'<html><body>Lucky number: '.$number.'</body></html>'
        );

    }
}
