<?php
use bianky\Bootstrap\App;

class Application {
    
    /**
     * Application class constructor
     * 
     */
    private function __construct() {}

    /**
     * Run the application
     * 
     * @return void
     */
    public function run()
    {
        /**
         * Define root path
         *  
         */
        define('ROOT', realpath(__DIR__.'/..'));

        /**
         * Define OS separator
         * 
         */
        define('DS', DIRECTORY_SEPARATOR);
        
        /**
         * Run the application
         * 
         */
        App::run();
    }
}