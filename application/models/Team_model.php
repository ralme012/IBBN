<?php
    class Team_model extends CI_Model {

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_data($id, $select = NULL) {
            if(!empty($select)){
                $this->db->select($select);
            }
            $this->db->from("tb_team");
            $this->db->where("member_id", $id);
            return $this->db_get();
        }

        public function insert($data) {
            $this->db->insert("tb_team", $data);
        }

        public function update($id, $data) {
            $this->db->where("member_id", $id);
            $this->db->update("tb_team", $data);
        }

        public function delete($id) {
            $this->db->where("member_id", $id);
            $this->db->delete("tb_team", $data);
        }       

        public function is_duplicated($field, $value, $id = NULL) {
            if(!($id)) {
                $this->dn->where("member_id <>", $id);
            }
            $this->db->from("tb_team");
            $this->db->where($field, $value);
            return $this->db->get()->num_rows() > 0;
        }

    }
?>