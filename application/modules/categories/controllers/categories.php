<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class categories extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('categories_model','categoriesdb',TRUE);
    }

    public function index() {
        $this->load->view('categories_view');
    }
     

    public function getdatatables(){
        $this->datatables->select('id,name,user_id,parent,is_default,slug,description,')
                        ->from('categories');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->categoriesdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->categoriesdb->update($this->input->post('id'));
          }else{
            $this->categoriesdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->categoriesdb->update($this->input->post('id'));
              }else{
                $this->categoriesdb->save();
              }
          }
        }
    }

    public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $this->db->delete('categories', array('id' => $id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('categories', array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module categories Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
