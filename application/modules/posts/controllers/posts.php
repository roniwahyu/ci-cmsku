<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class posts extends MX_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library('Datatables');
        $this->load->model('posts_model','postsdb',TRUE);
    }

    public function index() {
        $this->load->view('posts_view');
    }
     

    public function getdatatables(){
        $this->datatables->select('id,title,content,category_id,created,updated,user_id,is_published,is_page,slug,is_deleted,allow_comments,')
                        ->from('posts');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->postsdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->postsdb->update($this->input->post('id'));
          }else{
            $this->postsdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->postsdb->update($this->input->post('id'));
              }else{
                $this->postsdb->save();
              }
          }
        }
    }

    public function delete($id=null) {
      $id = $this->input->post('id');
        if (isset($_POST['id'])) {
            $id=$_POST['id'];
            $this->db->delete('posts', array('id' => $id));
            $this->session->set_flashdata('notif','data has been deleted');
        } elseif(!empty($id)){
            $hapus['kode'] = $this->uri->segment(3);
            $this->db->delete('posts', array('id' => $hapus['kode']));
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
        }
    }
    

}

/** Module posts Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
