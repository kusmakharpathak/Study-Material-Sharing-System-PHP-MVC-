<?php
class Teachers extends Controller {
    private $userModel;
    private $dashboardModel;
    private $teacherModule;

    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->userModel = $this->model('Admin');
        $this->dashboardModel = $this->model('Dashboard');
        $this->teacherModule = $this->model('Teacher');
    }

    public function index(){
        $this->view('dashboards/teacher/add_material');
    }



    public function add_material(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_URL);
            $user = $this->dashboardModel->getById(Id());
            $subject = $this->dashboardModel->get_sub();
            if(!empty($_FILES['file']))
            {
                $path="C:\\xampp\\htdocs\\StudyMaterial\\public\\doc\\";
                $path=$path.basename($_FILES['file']['name']);
                if(move_uploaded_file($_FILES['file']['tmp_name'],$path))
                {
                    echo"Picture uploaded";
                }
                else
                    echo"There was an error uploading the file, please try again!";
            }
            $data =[
                'material_id' => trim(sha1(time())),
                'users_id' => trim(id()),
                'title'=> trim($_POST['title']),
                'description'=> trim($_POST['description']),
                'file'=> $path,
                'subject' => trim(($_POST['subject'])),
                'semester' => trim(($_POST['semester'])),
                'title_err' => '',
                'description_err' => '',
                'file_err' => '',
                'subject_err' => '',
                'semester_err' => '',
                'admin' => $user,
                'sub' => $subject
            ];

            if(empty($data['title'])){
                $data['title_err'] = 'Please enter title';
            }
            if(empty($data['description'])){
                $data['description_err'] = 'Please enter description';
            }

            if(empty($data['file'])){
                $data['file_err'] = 'Please select file';
            }
            if(empty($data['subject'])){
                $data['subject_err'] = 'Please select Subject';
            }
            if(empty($data['semester'])){
                $data['semester_err'] = 'Please select Semester';
            }


            if(empty($data['title_err']) && empty($data['description_err']) && empty($data['file_err']) && empty($data['subject_err']) && empty($data['semester_err'])){
                echo $data['material_id']."<br>";
                echo $data['users_id']."<br>";
                echo $data['title']."<br>";
                echo $data['file']."<br>";
                if($this->teacherModule->add_material($data)){
                    flash('register_success', 'You are registered and can log in');
                    redirect('dashboards/teachers/add_material');
                }else{
                    die("Somethings want wrong");
                }
            }else{
                $this->view('dashboards/teacher/add_material', $data);
            }

        }else{
            $user = $this->dashboardModel->getById(Id());
            $subject = $this->dashboardModel->get_sub();

            $data =[
                'material_id' => '',
                'users_id' => '',
                'title'=> '',
                'description'=>'',
                'file'=> '',
                'subject' => '',
                'semester' => '',
                'title_err' => '',
                'description_err' => '',
                'subject_err' => '',
                'semester_err' => '',
                'admin' => $user,
                'sub' => $subject
            ];

            $this->view('dashboards/teacher/add_material', $data);
        }
    }
}
