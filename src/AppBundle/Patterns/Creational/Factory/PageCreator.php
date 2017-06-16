<?php

namespace AppBundle\Patterns\Creational\Factory;

/**
 * Description of PageCreator
 *
 * @author adrian
 */
class PageCreator implements Creator {

    public function create($type) {

        switch ($type) {
            case 'About':
                $page = new AboutPage();
                $page->setName("About Page");
                return $page;
                break;
            case 'Portfolio':
                $page = new PortfolioPage();
                $page->setName("Portfolio Page");
                return $page;
                break;
            case 'Contact':
                $page = new ContactPage();
                $page->setName("Contact Page");
                return $page;
                break;
        }
    }

}
