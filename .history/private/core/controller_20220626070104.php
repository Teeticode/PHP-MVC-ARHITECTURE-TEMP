<?php
/**
 * main controller class
 */
    class Controller
    {
        public function view($view, $data = array())
        {
            extract($data);

            //code ...
            if(file_exists("../private/views/" . $view . ".view.php"))
            {
                return("../private/views/" . $view . ".view.php");
            }else{
                return("../private/views/404.view.php");
            }
        }
    }
    