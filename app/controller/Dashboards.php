<?php
class Dashboards extends Controller
{

    private $dashboardModel;
    private $userModel;
    private $adminModel;

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->dashboardModel = $this->model('Dashboard');
        $this->adminModel = $this->model('Admin');
    }

    public function index()
    {
        $user = $this->dashboardModel->getById(Id());

        $data = [
            'admin' => $user,
//            'count' => $count
        ];

        $this->view('dashboards/dashboard', $data);
    }

    public function profile()
    {
        $users = $this->dashboardModel->getById(Id());
        $admin = $this->dashboardModel->getId(Id());
        $data = [
            'admin' => $users,
            'users' => $admin,
        ];
        $this->view('dashboards/profile', $data);
    }

    public function material()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $subject = $_POST['subject'];
            $mat = $this->dashboardModel->get_mat($subject);
            $users = $this->dashboardModel->getById(Id());
            $_SESSION['subject'] = $subject;
            $data = [
                'admin' => $users,
                'mat' => $mat,
                'a' =>'test',
            ];
            $this->view('dashboards/material', $data);
        }
        else{
            $mat = $this->dashboardModel->get_mat($_SESSION['subject']);
            $users = $this->dashboardModel->getById(Id());
            $data = [

                'admin' => $users,
                'mat' => $mat,
                'a' =>'test',
            ];
            $this->view('dashboards/material', $data);
        }
    }

    public function createSession($mat){
        $_SESSION['subject'] = $mat;
        redirect('dashboards/material');
    }



    public function semester(){
        $users = $this->dashboardModel->getById(Id());
        $data = [
            'admin' => $users,
        ];
        $this->view('dashboards/semester', $data);
    }

    public function first(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(1);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }
    public function second(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(2);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }
    public function third(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(3);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }
    public function fourth(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(4);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }
    public function fifth(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(5);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }
    public function six(){
        $users = $this->dashboardModel->getById(Id());
        $sub = $this->dashboardModel->sub(6);
        $data = [
            'admin' => $users,
            'sub'=>$sub
        ];
        $this->view('dashboards/subject', $data);
    }

    public function add(){
        $user = $this->dashboardModel->getById(Id());
        $data = [
            'admin' => $user
        ];
        $this->view('dashboards/add', $data);
    }

    public function add_sub(){
        $user = $this->dashboardModel->getById(Id());
        $subject = $this->dashboardModel->get_sub();

        $data = [
            'admin' => $user,
            'subject'=> $subject
        ];
        $this->view('dashboards/add_sub', $data);

    }

    public function users_details(){
        $user = $this->dashboardModel->getById(Id());
        $data = [
            'admin' => $user
        ];
        $this->view('dashboards/users_details', $data);
    }

    public function delete($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->dashboardModel->deletePost($id)){
                flash('post_message', 'Post Removed');
                redirect('posts');
            }else{
                die('something wrong');
            }

        }else{
            redirect('posts');
        }
    }
}