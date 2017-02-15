<?php

class Model
{
    protected $db;
    function __construct()
    {
        $this->db = new PDO('mysql:dbname=webstudio;host=localhost','root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->db->exec("SET NAMES 'utf8'");
    }

    public function get_data(){
        
    }
}
