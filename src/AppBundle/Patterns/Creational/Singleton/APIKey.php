<?php

namespace AppBundle\Patterns\Creational\Singleton;

/**
 * Implementation of singleton Pattern
 *
 * @author adrian
 */
class APIKey {

    private static $instance;
    private static $apiKey;

    function __construct() {
        
    }

    function __clone() {
        
    }

    public static function getIntsane() {
        if (self::$instance === null)
            self::$instance = new APIKey();
        return self::$instance;
    }
    static function getApiKey() {
        return self::$apiKey;
    }

    static function setApiKey($apiKey) {
        self::$apiKey = $apiKey;
    }


}
