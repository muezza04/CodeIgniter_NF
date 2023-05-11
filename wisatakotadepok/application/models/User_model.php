 <?php
    class User_model extends Ci_Model{

        private $table = "users";

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }

        public function findById($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

        public function login($user, $pass){
            $sql = "SELECT * FROM users WHERE username=? AND password=MD5(?)";
            $data = [$user, $pass];
            $query = $this->db->query($sql, $data);
            return $query->row();
        }

        public function insert($data){
            $sql = "INSERT INTO users (username,password,email,created_at,last_login,status,role) VALUES(?,?,?,?,?,?,?)";
            return $this->db->query($sql,$data);
        }

        // public function insert($data,$table){
        //     return $this->db->insert($table, $data);
        // }

        public function update($data){
            $sql = "UPDATE users SET username=?, password=?, email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        public function delete($id){
            $sql = "DELETE FROM users WHERE id=?";
            $this->db->query($sql,array($id));
        }
    }
 
 ?>