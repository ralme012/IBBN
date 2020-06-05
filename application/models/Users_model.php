<?php
    class Users_model extends CI_Model {

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_user_data($user_login) {
            $this->db
                ->select("user_id, password_hash, user_full_name, user_email")
                ->from("tb_usuarios")
                ->where("user_login", $user_login);
            
            $result = $this->db->get();

            if ($result->num_rows() > 0){
                return $result->row();
            } else {
                return null;
            }

        }

        public function get_data($id, $select = NULL) {
            if(!empty($select)){
                $this->db->select($select);
            }
            $this->db->from("tb_usuarios");
            $this->db->where("user_id", $id);
            return $this->db_get();
        }

        public function insert($data) {
            $this->db->insert("tb_usuarios", $data);
        }

        public function update($id, $data) {
            $this->db->where("user_id", $id);
            $this->db->update("tb_usuarios", $data);
        }

        public function delete($id) {
            $this->db->where("user_id", $id);
            $this->db->delete("tb_usuarios", $data);
        }       

        public function is_duplicated($field, $value, $id = NULL) {
            if(!($id)) {
                $this->dn->where("user_id <>", $id);
            }
            $this->db->from("tb_usuarios");
            $this->db->where($field, $value);
            return $this->db->get()->num_rows() > 0;
        }

    }
?>