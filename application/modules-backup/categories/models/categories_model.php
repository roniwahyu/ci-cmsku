<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Categories_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('categories', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('categories');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'name' => $this->input->post('name', TRUE),
           
            'user_id' => $this->input->post('user_id', TRUE),
           
            'is_default' => $this->input->post('is_default', TRUE),
           
            'slug' => $this->input->post('slug', TRUE),
           
            'description' => $this->input->post('description', TRUE),
           
        );
        $this->db->insert('categories', $data);
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'name' => $this->input->post('name', TRUE),
       
       'user_id' => $this->input->post('user_id', TRUE),
       
       'is_default' => $this->input->post('is_default', TRUE),
       
       'slug' => $this->input->post('slug', TRUE),
       
       'description' => $this->input->post('description', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('categories', $data);
    }

    function delete($id) {
        foreach ($id as $row) {
            $this->db->where('id', $row);
            $this->db->delete('categories');
        }
    }

}
?>
