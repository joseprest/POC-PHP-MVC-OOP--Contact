<?php

// Base Controller

class Controller{

    public function __construct(){

    }
    
    public function redirect($url, $wait = 0){

        if ($wait == 0){

            header("Location:$url");

        } else {

            include CURR_VIEW_PATH . "message.html";

        }

        exit;

    }

}