<?php

class Controller 
{
    public function invoke ()
    {
        $vue = new Vue();
        $vue->display();
    }
}
