<?php
class Users extends Controller {
    private $userModel;
    private $dashboardModel;

    public function __construct(){
        $this->userModel = $this->model('Admin');
        $this->dashboardModel = $this->model('Dashboard');
    }

    public function index(){
        $this->login();
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_URL);
            $user = $this->dashboardModel->getById(Id());
            $data =[
                'user_id' => trim(sha1(time())),
                'user_name' => trim($_POST['user_name']),
                'email'=> trim($_POST['email']),
                'password'=> trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'user_type' => trim($_POST['user_type']),
                'user_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_pass_err' => '',
                'user_type_err' => '',
                'admin' => $user
            ];

            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }else{
                //check email
                if($this->userModel->find_by_email($data['email'])){
                    $data['email_err'] = 'email is already taken';
                }
            }
            if(empty($data['user_name'])){
                $data['user_name_err'] = 'Please enter username name';
            }else {
                //check email
                if ($this->userModel->find_by_user_name($data['user_name'])) {
                    $data['user_name_err'] = 'username is already taken';
                }
            }

            if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
            }elseif (strlen($data['password'])<6){
                $data['password_err'] = 'password must bt at least 6 char';
            }
            if(empty($data['confirm_password'])){
                $data['confirm_pass_err'] = 'Please enter confirm password';
            }else{
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_pass_err'] = 'Password do not match';
                }
            }
            if(empty($data['user_type'])){
                $data['user_type_err'] = 'Please choose user type';
            }


            if(empty($data['email_err']) && empty($data['user_name_err']) && empty($data['password_err']) && empty($data['confirm_pass_err']) && empty($data['user_type_err'])){

                echo $data['user_id']."<br>";
                echo $data['user_name']."<br>";
                $user = $data['user_name']."<br>";
                echo $data['email']."<br>";
                $email = $data['email'];
                echo $data['password']."<br>";
                $password = $data['password']."<br>";
                echo $data['confirm_password']."<br>";
                echo $data['user_type']."<br>";
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    flash('register_success', 'You are registered and can log in');
                    sendmal("Login Credential", "Your login user name if $user, password = $password Thank you", $email);
                    mail( 'kusmakharpathak.sunway@gmail.com',"Login Credential", "Your login user name if $user, password = $password Thank you");
                    redirect('dashboards/add');
                }else{
                    die("Somethings want wrong");
                }
            }else{
                $this->view('dashboards/add', $data);
            }

        }else{
            $user = $this->dashboardModel->getById(Id());

            $data =[
                'user_id' => '',
                'user_name' => '',
                'email'=> '',
                'password'=> '',
                'confirm_password' => '',
                'user_type' => '',
                'user_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_pass_err' => '',
                'user_type_err' => '',
                'admin' => $user
            ];

            $this->view('dashboards/add', $data);

        }
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD']=='POST'){


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_URL);

            $data =[
                'email'=> trim($_POST['email']),
                'password'=> trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }

            if(empty($data['password'])){
                $data['password_err'] = 'Please enter password';
            }

            if(empty($data['user_type'])){
                $data['user_type_err'] = 'Please choose user type password';
            }

            if($this->userModel->find_by_email($data['email'])){


            }else{
                $data['email_err'] = 'No user found';
            }

            if(empty($data['email_err']) && empty($data['password_err'])){

                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['password_err'] = 'password incorrect';

                    $this->view('users/login', $data);
                }
            }else{

                $this->view('users/login', $data);
            }

        }else{

            $data =[
                'email'=> '',
                'password'=> '',
                'email_err' => '',
                'password_err' => '',
            ];
            $this->view('users/login', $data);

        }
    }

    public function user_details(){
//        user_records_id, user_id,
//                                 f_name, l_name, gender, date_of_birth, contact_no,
//                                 father_name, mother_name, address, about
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_URL);
            $user = $this->dashboardModel->getById(Id());
            if(!empty($_FILES['image']))
            {
                $path="C:\\xampp\\htdocs\\StudyMaterial\\public\\img\\";
                $path=$path.basename($_FILES['image']['name']);
                if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
                {
                    echo"Picture uploaded";
                }
                else
                    echo"There was an error uploading the file, please try again!";
            }
            $data =[
                'user_records_id' => trim(sha1(time())),
                'user_id' => trim(id()),
                'f_name'=> trim($_POST['f_name']),
                'l_name'=> trim($_POST['l_name']),
                'gender'=> trim($_POST['gender']),
                'date_of_birth'=> trim($_POST['date_of_birth']),
                'contact_no'=> trim($_POST['contact_no']),
                'father_name'=> trim($_POST['father_name']),
                'mother_name'=> trim($_POST['mother_name']),
                'address'=> trim($_POST['address']),
                'about'=> trim($_POST['about']),
                'image'=> $path,

                'f_name_err' => '',
                'l_name_err' => '',
                'gender_err' => '',
                'date_of_birth_err' => '',
                'contact_no_err' => '',
                'father_name_err' => '',
                'mother_name_err' => '',
                'address_err' => '',
                'about_err' => '',
                'admin' => $user
            ];

            if(empty($data['f_name'])){
                $data['f_name_err'] = 'Please enter first name';
            }
            if(empty($data['l_name'])){
                $data['l_name_err'] = 'Please enter last name';
            }

            if(empty($data['gender'])){
                $data['gender_err'] = 'Please select gender';
            }
            if(empty($data['date_of_birth'])){
                $data['date_of_birth_err'] = 'Please enter date of birth';
            }
            if(empty($data['contact_no'])){
                $data['contact_no_err'] = 'Please enter contact no';
            }
            if(empty($data['father_name'])){
                $data['father_name_err'] = "Please enter father's name";
            }
            if(empty($data['mother_name'])){
                $data['mother_name_err'] = "please enter mother's name";
            }
            if(empty($data['address'])){
                $data['address_err'] = 'Please enter address';
            }
            if(empty($data['about'])){
                $data['about_err'] = 'Please write short bio';
            }


            if(empty($data['f_name_err']) && empty($data['l_name_err']) && empty($data['gender_err']) && empty($data['date_of_birth_err']) && empty($data['contact_no_err']) && empty($data['father_name_err']) && empty($data['mother_name_err']) && empty($data['about_err'])){
                echo $data['user_id']."<br>";
                echo $data['f_name']."<br>";
                echo $data['l_name']."<br>";
                echo $data['gender']."<br>";
                echo $data['date_of_birth']."<br>";
                echo $data['contact_no']."<br>";
                echo $data['father_name']."<br>";
                echo $data['mother_name']."<br>";
                echo $data['address']."<br>";
                echo $data['about']."<br>";
                echo $data['user_records_id']."<br>";
                if($this->userModel->user_details($data)){
                    $this->userModel->update(id());
                    flash('register_success', 'You are registered and can log in');
                    redirect('dashboards');
                }else{
                    die("Somethings want wrong");
                }
            }else{
                $this->view('dashboards/users_details', $data);
            }

        }else{
            $user = $this->dashboardModel->getById(Id());

            $data =[
                'user_records_id' => '',
                'user_id' => '',
                'f_name'=> '',
                'l_name'=> '',
                'gender'=> '',
                'date_of_birth'=> '',
                'contact_no'=> '',
                'father_name'=> '',
                'mother_name'=> '',
                'address'=> '',
                'about'=> '',
                'f_name_err' => '',
                'l_name_err' => '',
                'gender_err' => '',
                'date_of_birth_err' => '',
                'contact_no_err' => '',
                'father_name_err' => '',
                'mother_name_err' => '',
                'address_err' => '',
                'about_err' => '',
                'admin' => $user
            ];

            $this->view('dashboards/users_details', $data);
        }
    }

    public function add_sub(){
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_URL);
            $user = $this->dashboardModel->getById(Id());
            $data = [
                'sub' => trim($_POST['subject']),
                'subject_err' => '',
                'admin' => $user
            ];
            if (empty($data['sub'])) {
                $data['subject_err'] = 'Please enter subject name';
            }
            if (empty($data['subject_err'])) {
                echo $data['subject'] . "<br>";

                if ($this->userModel->add_sub($data)) {
//                flash('register_success', 'You are registered and can log in');
                    redirect('dashboards/add_sub');
                } else {
                    die("Somethings want wrong");
                }
            }else{
                $this->view('dashboards/add_sub', $data);
            }
        }else{
            $user = $this->dashboardModel->getById(Id());
            $data =[
                'subject' => '',
                'subject_err' => '',
                'admin' => $user
            ];
            $this->view('dashboards/add_sub', $data);
        }
    }

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['user_name'] = $user->user_name;
        $_SESSION['email'] = $user->email;
        $_SESSION['user_type'] = $user->user_type;
        if($user->user_type == 'y') {
            redirect('dashboards');
        }else{
            (redirect('dashboards/users_details'));
        }
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['email']);
        unset($_SESSION['subject']);
        session_destroy();
        redirect('users/login');
    }
}
