<?php
  class AlignmentsModel extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get($id = FALSE) {
      if($id === FALSE){
        $query = $this->db->get('alignments');
        return $query->result_array();
      }

      $whereCondition = array('id' => $id);
      $query = $this->db->get_where('alignments', $whereCondition);
      return $query->row_array();
    }
  }
?>
