<?php
/***
 * main app file
 */
class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array()
    function __construct()
    {
        // code...
        echo "construct"
    }
}
