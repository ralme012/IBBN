<?php
    class Events_model extends CI_Model {

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_data($id, $select = NULL) {
            if(!empty($select)){
                $this->db->select($select);
            }
            $this->db->from("tb_event");
            $this->db->where("event_id", $id);
            return $this->db_get();
        }

        public function insert($data) {
            $this->db->insert("tb_event", $data);
        }

        public function update($id, $data) {
            $this->db->where("event_id", $id);
            $this->db->update("tb_event", $data);
        }

        public function delete($id) {
            $this->db->where("event_id", $id);
            $this->db->delete("tb_event", $data);
        }       

        public function is_duplicated($field, $value, $id = NULL) {
            if(!($id)) {
                $this->dn->where("event_id <>", $id);
            }
            $this->db->from("tb_event");
            $this->db->where($field, $value);
            return $this->db->get()->num_rows() > 0;
        }

    }
?>