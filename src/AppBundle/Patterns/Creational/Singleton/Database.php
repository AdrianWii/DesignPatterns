<?php

namespace AppBundle\Patterns\Creational\Singleton;

/**
 * Implementation of singleton Pattern
 *
 * @author adrian
 */
class Database {
    private static $instance;
    
    function __construct() {
        
    }
    
    function __clone() {
        
    }
    
    public static function getIntsane()
    {
        if(self::$instance===null)
            self::$instance = new Database();
        return self::$instance;
    }
            
}
