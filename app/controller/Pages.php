<?php
class Pages extends Controller {
    public function __construct(){
    }


    public function index(){
        if(isLoggedIn()){
            redirect('dashboards');
        }

        $data = [
            'title' => 'Welcome to MVC',
        ];
        $this->view('pages/index', $data);
    }
    public function dashboard(){
        $data = [
            'title' => 'Welcome to MVC',
        ];
        $this->view('pages/dashboards', $data);
    }
}