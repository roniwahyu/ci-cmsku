<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('users', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'email' => $this->input->post('email', TRUE),
           
            'password' => $this->input->post('password', TRUE),
           
            'name' => $this->input->post('name', TRUE),
           
        );
        $this->db->insert('users', $data);
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'email' => $this->input->post('email', TRUE),
       
       'password' => $this->input->post('password', TRUE),
       
       'name' => $this->input->post('name', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    function delete($id) {
        foreach ($id as $row) {
            $this->db->where('id', $row);
            $this->db->delete('users');
        }
    }

}
?>
