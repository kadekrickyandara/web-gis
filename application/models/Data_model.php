<?php

class Data_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->table = "prediksi";
    }

    public function get($where = array(), $select = "*")
    {
        $results = $this->db
            ->select($select)
            ->from($this->table)
            ->where($where)
            ->get()
            ->result();

        return $results;
    }


}
?>