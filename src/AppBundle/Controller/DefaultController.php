<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Patterns\Creational\Singleton\Database as Singleton;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $singletons=array();
        array_push($singletons, Singleton::getIntsane());
        array_push($singletons, Singleton::getIntsane());
        array_push($singletons, Singleton::getIntsane());
        
        return $this->render('default/index.html.twig', array('singletons'=>$singletons));
    }
}
