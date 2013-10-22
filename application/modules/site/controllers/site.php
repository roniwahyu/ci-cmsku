<?php 
// Site Front End

class Site Extends MX_Controller{

	function __construct(){
		parent::__construct();

	}

	function index(){
		// $data['pagelist']=$this->get_pagelist();
		$this->load->view('content');
		

	}

	function page($page=null){
		$this->load->model('pages/pagesadmin_model','pagedb',TRUE);
		// if(!($page==null)):
			//$data['pagelist']=$this->get_pagelist();
			$data['page']=$this->pagedb->getpage($page)->result();
			$data['pagenum']=$this->pagedb->getpage($page)->num_rows();
		// endif;
		$this->load->view('page',$data);
	}

	function post($id){
		$this->load->model('posts_model','postdb',TRUE);
		$data['post']=$this->postdb->getpost($id);
		$this->load->view('single',$data);
	}
	
	function categories($id){
		$this->load->model('categories_model','catdb',TRUE);
		$data['categories']=$this->catdb->getcat($id);
		$this->load->view('single',$data);
	}

	function portfolio($id){
		$this->load->model('portfolios_model','foliodb',TRUE);
		$data['folio']=$this->foliodb->getfolio($id);
		$this->load->view('portfolio',$data);
	}

	function _have_pages(){
		$this->load->model('pages_model','pagedb',TRUE);
		$data['page']=$this->pagedb->getpage($page);
		
	}

	public function get_pagelist(){
		$this->load->model('pages/pagesadmin_model','pagesdb',TRUE);
		$pagelist=$this->pagesdb->getpage()->result();
		$numrows=$this->pagesdb->getpage()->num_rows();
		
		if($numrows>0):
			$thelist="<ul class='nav'>";
			$thelist.='<li class="active"><a href="'. base_url().'site/">Home</a></li>';
			foreach($pagelist as $list):
				 $thelist .="<li><a href='".base_url()."site/page/".$list->slug."'> ".$list->title."</a></li>";
				
				
			endforeach;
		$thelist .= "</ul>";
		/*elseif($numrows==null):
			$data['pagelist']="There is No Page Here";
			return $data['pagelist'];*/
		endif;

		echo $thelist;

	}



}


 ?>