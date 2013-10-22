<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class articles extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('articles_model','articlesdb',TRUE);
    }

    public function index() {
        $this->load->view('articles_view');
    }
     

    public function getdatatables(){
        $this->datatables->select('id,title,slug,pubdate,body,created,modified,')
                        ->from('articles');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->articlesdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->articlesdb->update($this->input->post('id'));
          }else{
            $this->articlesdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->articlesdb->update($this->input->post('id'));
              }else{
                $this->articlesdb->save();
              }
          }
        }
    }

    public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $this->db->delete('articles', array('id' => $id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('articles', array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module articles Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
