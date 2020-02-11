<?php
class Dashboard{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query('SELECT * FROM sunway.users');
        return $this->db->resultSet();
    }

    public function getById($id){
        $this->db->query('SELECT * FROM sunway.users WHERE user_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getId($id){
        $this->db->query('SELECT * FROM sunway.users_records INNER JOIN sunway.users  ON users_records.user_id = users.user_id where users.user_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function sub($data){
        $this->db->query('SELECT subject FROM sunway.material WHERE semester = :sem');
        $this->db->bind(':sem', $data);
        return $this->db->resultSet();
    }

    public function get_sub(){
        $this->db->query("SELECT * FROM sunway.subject");
        return $this->db->resultSet();
    }

    public function get_mat($subject){
        $this->db->query('SELECT * FROM sunway.material WHERE subject = :subject');
        $this->db->bind(':subject', $subject);
        return $this->db->resultSet();
    }


    public function getByEmail($email){
        $this->db->query('SELECT * FROM sunway.users WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        echo $row;
    }


    public function count($type){
        $this->db->query('SELECT count(*) FROM sunway.users WHERE user_id = :type');
        $this->db->bind(':id', $type);
        return $this->db->rowCount();
    }

    public function deleteUsers($id){
        $this->db->query('DELETE FROM sunway.users WHERE user_id = :id');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}