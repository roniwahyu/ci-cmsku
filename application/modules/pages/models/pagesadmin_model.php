<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Pagesadmin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function getpage($page=null){
        if(!($page==null)):
            $query=$this->db->get_where('pages',array('slug'=>$page));
        else:
            $query=$this->db->get('pages');
        endif;
        return $query;
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('pages', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('pages');
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
           
            'order' => $this->input->post('order', TRUE),
           
            'body' => $this->input->post('body', TRUE),
           
            'parent_id' => $this->input->post('parent_id', TRUE),
           
            'template' => $this->input->post('template', TRUE),
           
        );
        $this->db->insert('pages', $data);
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'title' => $this->input->post('title', TRUE),
       
       'slug' => $this->input->post('slug', TRUE),
       
       'order' => $this->input->post('order', TRUE),
       
       'body' => $this->input->post('body', TRUE),
       
       'parent_id' => $this->input->post('parent_id', TRUE),
       
       'template' => $this->input->post('template', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('pages', $data);
    }

    function delete($id) {
        foreach ($id as $row) {
            $this->db->where('id', $row);
            $this->db->delete('pages');
        }
    }

    function get_dropdown_array($key, $value, $from){
        $result = array();
        $array_keys_values = $this->db->query('select '.$key.', '.$value.' from '.$from.' order by id asc');
       foreach ($array_keys_values->result() as $row)
        {
            $result[$row->$key]= $row->$value;
        }
        return $result;
    }

}
?>
