<?php
/**
 * main home class
 */
class Home extends Controller
{
   function index()
   {
        //code...
        echo $this->view('home');
   } 
}

