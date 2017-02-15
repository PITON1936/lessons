<?php

class Model_Portfolio extends Model
{
    public function getAllWorks()
    {
        $query=$this->db->query("SELECT * FROM portfolio");
        return $query->fetchAll();
    }

    public function getWorkById($id)
    {
        $query = $this->db->query("SELECT * FROM portfolio WHERE id=".$id);
        return $query->fetchObject();
    }
}