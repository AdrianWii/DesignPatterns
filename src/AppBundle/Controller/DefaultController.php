<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Patterns\Creational\Singleton\APIKey as Singleton;
use AppBundle\Patterns\Creational\Singleton\PageCreator as Factory;
use AppBundle\Patterns\Creational\Prototype\Portfolio as Prototype;

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
            'pattern'=> 'factory', 'outputs'=>array(
                $page1->getName(), 
                $page2->getName(),  
                $page3->getName()
                )));
    }
    
        /**
     * @Route("/prototype", name="prototype_result")
     */
    public function prototypeAction(Request $request)
    {

        $text = "Using Prototype Pattern we create one standard object "
                . "for each class, and clone that object "
                . "to create new instances."
                . "We apply it if we need to create "
                . "multiple objects with similar properties."
                . "Instead of setting the fields for each object separately, "
                . "we can make clones and only change unique elements";
        
        $portfolio1 = new \AppBundle\Patterns\Creational\Prototype\GraphicPortfolio(array('Photoshop', 'Illustrator'));
        $portfolio1->setName('Company Logo');
        $portfolio2 = clone $portfolio1;
        $portfolio1->setName('Movie Poster');
        
                $portfolio3 = new \AppBundle\Patterns\Creational\Prototype\ApplicationPortfolio(array('PHP 7', 'SYMFONY 3.3.1'));
        $portfolio3->setName('Managment system');
        $portfolio4 = clone $portfolio1;
        $portfolio4->setName('Finance system');
        return $this->render('AppBundle:default:pattern.html.twig', array( 
            'pattern'=> 'prototype', 'text'=>$text, 'outputs'=>array(
                $portfolio1->getName(),
                $portfolio2->getName(),
                $portfolio3->getName(),
                $portfolio4->getName()
                )));
    }
}
