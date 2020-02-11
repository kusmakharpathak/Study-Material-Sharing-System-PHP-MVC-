<?php
class Admin {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function register($data){
        $this->db->query("INSERT INTO sunway.users(user_id, user_name, email, password, user_type, status) VALUES (:user_id, :user_name, :email, :password, :user_type, :status)");
        //bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':user_name', $data['user_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':user_type', $data['user_type']);
        $this->db->bind(':status', 'n');
        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function add_sub($data){
        $this->db->query("INSERT INTO sunway.subject(subject) VALUES (:subject)");
        //bind values
        $this->db->bind(':subject', $data['sub']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function update($id){
        $this->db->query("UPDATE sunway.users SET status = 'y' WHERE user_id = :id");
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $password){
        $this->db->query("SELECT * FROM sunway.users WHERE email = :email or user_name = :user_name");
        $this->db->bind(':email', $email);
        $this->db->bind(':user_name', $email);
        $row = $this->db->single();
        $hashed_password = $row->password;
//        password_verify($password, $hashed_password);
        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }
    }

    public function user_details($data){
        $this->db->query("INSERT INTO sunway.users_records(user_records_id, user_id, f_name, l_name, gender,
                                 date_of_birth, contact_no, father_name, mother_name, address, about, image)
                                 VALUES (:user_records_id, :user_id, :f_name, :l_name, :gender,
                                 :date_of_birth, :contact_no, :father_name, :mother_name, :address, :about, :image)");
        $this->db->bind(':user_records_id', $data['user_records_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':f_name', $data['f_name']);
        $this->db->bind(':l_name', $data['l_name']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':date_of_birth', $data['date_of_birth']);
        $this->db->bind(':contact_no', $data['contact_no']);
        $this->db->bind(':father_name', $data['father_name']);
        $this->db->bind(':mother_name', $data['mother_name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':about', $data['about']);
        $this->db->bind(':image', $data['image']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function find_by_email($email){
        $this->db->query("SELECT * FROM sunway.users WHERE email = :email or  user_name = :user_name");
        $this->db->bind(':email', $email);
        $this->db->bind(':user_name', $email);
        $row = $this->db->single();
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function find_by_user_name($user_name){
        $this->db->query("SELECT * FROM sunway.users WHERE user_name = :user_name");
        $this->db->bind(':user_name', $user_name);
        $row = $this->db->single();
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }



    public function getUserById($id){
        $this->db->query("SELECT * from sunway.users  WHERE user_id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
}
