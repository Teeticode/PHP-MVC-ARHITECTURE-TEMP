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
        print_r($this->getURL());
    }
    private function getURL()
    {
        return explode("/", trim($_GET['url'],"/"));
    }
}
