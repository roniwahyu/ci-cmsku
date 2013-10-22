<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class users extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('users_model','usersdb',TRUE);
    }

    public function index() {
        $this->load->view('users_view');
    }
     

    public function getdatatables(){
        $this->datatables->select('id,email,password,name,')
                        ->from('users');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->usersdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->usersdb->update($this->input->post('id'));
          }else{
            $this->usersdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->usersdb->update($this->input->post('id'));
              }else{
                $this->usersdb->save();
              }
          }
        }
    }

    public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $this->db->delete('users', array('id' => $id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('users', array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module users Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
