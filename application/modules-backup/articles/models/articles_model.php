<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Articles_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('articles', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('articles');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'title' => $this->input->post('title', TRUE),
           
            'slug' => $this->input->post('slug', TRUE),
           
            'pubdate' => $this->input->post('pubdate', TRUE),
           
            'body' => $this->input->post('body', TRUE),
           
            'created' => $this->input->post('created', TRUE),
           
            'modified' => $this->input->post('modified', TRUE),
           
        );
        $this->db->insert('articles', $data);
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'title' => $this->input->post('title', TRUE),
       
       'slug' => $this->input->post('slug', TRUE),
       
       'pubdate' => $this->input->post('pubdate', TRUE),
       
       'body' => $this->input->post('body', TRUE),
       
       'created' => $this->input->post('created', TRUE),
       
       'modified' => $this->input->post('modified', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('articles', $data);
    }

    function delete($id) {
        foreach ($id as $row) {
            $this->db->where('id', $row);
            $this->db->delete('articles');
        }
    }

}
?>
