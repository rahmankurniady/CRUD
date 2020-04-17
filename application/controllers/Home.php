<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_crud');  //load model ambil data
		$this->load->helper('form');
		$this->load->library('form_validation'); //make sure to have it, before view call 
	}

	public function index()
	{

		 $data['book_db'] = $this->m_crud->get_all_data('book_db')->result();  //input data ke view

	    //print_r($data);

		$this->load->view("frame/header");
		$this->load->view('home',$data);
		$this->load->view("frame/footer");
	}

	public function add_page(){

		$this->load->view("frame/header");
		$this->load->view('add');
		$this->load->view("frame/footer");

	}

	public function edit_page(){

		 $where = array(
		 			'No' => $_GET['id']
			 );
		  $data['book_db'] = $this->m_crud->getByCondition('book_db',$where)->result();

		$this->load->view("frame/header");
		$this->load->view('edit',$data);
		$this->load->view("frame/footer");

	}

	public function delete(){

		 $this->m_crud->delete($_GET['id'],'book_db');

		$url="Home";
		redirect(base_url($url));
	

	}

	public function add_submit(){
		
		$Title = $this->input->post('Title');
		$Author = $this->input->post('Author');
		$date_published = $this->input->post('date_published');
		$Number_Page = $this->input->post('Number_Page');
		$Type_book = $this->input->post('Type_book');


		$data = array(
				'Title' => $Title,
				'Author' => $Author,
				'date_published' => $date_published,
				'Number_Page' => $Number_Page,
				'Type_book' => $Type_book
		);

	$this->m_crud->insert("book_db",$data);
	
	$url="Home";
			redirect(base_url($url));
	
	}

	public function edit_submit(){
		
		$Title = $this->input->post('Title');
		$Author = $this->input->post('Author');
		$date_published = $this->input->post('date_published');
		$Number_Page = $this->input->post('Number_Page');
		$Type_book = $this->input->post('Type_book');
		$No = $this->input->post('No');


		$data = array(
				'Title' => $Title,
				'Author' => $Author,
				'date_published' => $date_published,
				'Number_Page' => $Number_Page,
				'Type_book' => $Type_book
		);

		 	$this->m_crud->data_update("book_db",$No,$data);

		 $url="Home";
		 redirect(base_url($url));
	}

}

