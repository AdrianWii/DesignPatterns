<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Patterns\Creational\Singleton\APIKey as Singleton;

use AppBundle\Patterns\Creational\Singleton\PageCreator as Factory;

class DefaultController extends Controller
{
        /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:default:index.html.twig', array('singletons'=>"", 
            'key'=>""));
    }
    
    /**
     * @Route("/singleton", name="singleton_result")
     */
    public function singletonAction(Request $request)
    {
        $singletons=array();
        array_push($singletons, Singleton::getIntsane());
        array_push($singletons, Singleton::getIntsane());
        array_push($singletons, Singleton::getIntsane());
        
        //change value of apikey there, will change in all application
        $APIKey = Singleton::setApiKey("bdoslsfs5f92e6d52s6f56v8cds54sf");
        $APIKey = Singleton::getApiKey();
        
        $text = "Datbase class implement singleton pattern. As a result of "
                . "creating three objects, no new objects are created. "
                . "We operate on one, originally created object.";

        return $this->render('AppBundle:default:pattern.html.twig', array(
            'pattern'=> 'SINGLETON',
            'code'=>$singletons, 'text'=>$text, 'key'=>$APIKey));
    }
    
    /**
     * @Route("/factory", name="factory_result")
     */
    public function factoryAction(Request $request)
    {

        $creator = new \AppBundle\Patterns\Creational\Factory\PageCreator();
        $page1=$creator->create("About");
        $page2=$creator->create("Portfolio");
        $page3=$creator->create("Contact");
        
        return $this->render('AppBundle:default:pattern.html.twig', array( 
            'pattern'=> "FACTORY", 'outputs'=>array(
                $page1->getName(), 
                $page2->getName(),  
                $page3->getName()
                )));
    }
}
