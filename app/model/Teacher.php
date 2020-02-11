<?php

class Teacher
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function add_material($data)
    {
        $this->db->query("INSERT INTO sunway.material(mat_id, users_id, title, description, file, subject, semester) VALUES (:material_id, :users_id, :title, :description, :file, :subject, :semester)");
        //bind values
        $this->db->bind(':material_id', $data['material_id']);
        $this->db->bind(':users_id', $data['users_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':file', $data['file']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':semester', $data['semester']);
        // execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
