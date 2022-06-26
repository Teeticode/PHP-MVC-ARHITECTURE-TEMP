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
                require file_get_contents(ROOT."/../private/views/" . $view . ".view.php");
            }else{
                require file_get_contents(ROOT."/../private/views/404.view.php");
            }
        }
    }
    