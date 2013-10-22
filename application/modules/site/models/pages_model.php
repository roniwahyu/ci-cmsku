<?php 

 
class Pages_model extends CI_Model{

	function __construct(){
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
}

 ?>