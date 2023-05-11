<?php
    class User_model extends Ci_Model{

        private $table = "komentar";

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }

        public function findById($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

        public function getInnerData(){
            $sql = "";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function insert($data,$table){
            return $this->db->insert($table, $data);
        }
    }
 
 ?>