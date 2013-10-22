<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Posts_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('posts', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('posts');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'title' => $this->input->post('title', TRUE),
           
            'content' => $this->input->post('content', TRUE),
           
            'category_id' => $this->input->post('category_id', TRUE),
           
            'created' => $this->input->post('created', TRUE),
           
            'updated' => $this->input->post('updated', TRUE),
           
            'user_id' => $this->input->post('user_id', TRUE),
           
            'is_published' => $this->input->post('is_published', TRUE),
           
            'is_page' => $this->input->post('is_page', TRUE),
           
            'slug' => $this->input->post('slug', TRUE),
           
            'is_deleted' => $this->input->post('is_deleted', TRUE),
           
            'allow_comments' => $this->input->post('allow_comments', TRUE),
           
        );
        $this->db->insert('posts', $data);
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'title' => $this->input->post('title', TRUE),
       
       'content' => $this->input->post('content', TRUE),
       
       'category_id' => $this->input->post('category_id', TRUE),
       
       'created' => $this->input->post('created', TRUE),
       
       'updated' => $this->input->post('updated', TRUE),
       
       'user_id' => $this->input->post('user_id', TRUE),
       
       'is_published' => $this->input->post('is_published', TRUE),
       
       'is_page' => $this->input->post('is_page', TRUE),
       
       'slug' => $this->input->post('slug', TRUE),
       
       'is_deleted' => $this->input->post('is_deleted', TRUE),
       
       'allow_comments' => $this->input->post('allow_comments', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
    }

    function delete($id) {
        foreach ($id as $row) {
            $this->db->where('id', $row);
            $this->db->delete('posts');
        }
    }

}
?>
