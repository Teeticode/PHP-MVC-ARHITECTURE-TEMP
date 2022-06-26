<?php
/***
 * main app file
 */
class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();
    public function __construct()
    {
        // code...
        echo "construct";
    }
    private function getURL()
    {
        print_r($_GET);
    }
}
