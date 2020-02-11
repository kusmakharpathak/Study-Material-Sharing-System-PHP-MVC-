<?php

/*
 * Base Controller
 * Loads the models and views
 */

class Controller{
    //load model
    public function model($model){
        //Required model file
        require_once '../app/model/'.$model.'.php';
        //Instantiate model
        return new $model();
    }

    public function view($view, $data = []){
        if(file_exists('../app/view/'. $view . '.php')){
            require_once '../app/view/'. $view . '.php';
        }else{
            die('View does not exist');
        }
    }

}