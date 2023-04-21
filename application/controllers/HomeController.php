<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index($param = null)	
	{
		$this->load->model('GetFiltersModel'); 
		$this->load->model('FilterModel'); 

		// getting all values and converting it into pages
		$array = $this->GetFiltersModel->all();
		$city_filtered_array = $this->FilterModel->city_filter($array);
		$mode_filtered_array = $this->FilterModel->mode_filter($city_filtered_array);
		$filtered_array = $this->FilterModel->type_filter($mode_filtered_array);

		$chunks = array_chunk($filtered_array, 5);
		//5 college is taken wrt the number of pages
		$main_array = $chunks[$param ? $param -1 : 0];
		// print_r($main_array);
		
		
		
		//if there is search key filtering array
		$search_key = ($this->session->userdata('search'));
		if ($search_key != '')
		{
			$filtered_array = $this->FilterModel->search($filtered_array, $search_key);
		}

		$chunks = array_chunk($filtered_array, 5);
		//5 college is taken wrt the number of pages
		$main_array = $chunks[$param ? $param -1 : 0];
		// print_r($main_array);
		
		//pagination config
		$count['pages'] = count($filtered_array)/5;
		$count['present_page'] = $param;
		// print_r($this->session->get_userdata('search'));
		$city_filters = $this->session->userdata('city_filters')? $this->session->userdata('city_filters') : array();
		$type_filters = $this->session->userdata('type_filters') ? $this->session->userdata('type_filters') : array();
		$mode_filters = $this->session->userdata('mode_filters') ? $this->session->userdata('mode_filters') : array();
		$merged_array = array_merge($city_filters, $type_filters, $mode_filters);
		$data['cities'] = $this->GetFiltersModel->city();
		$data['all'] = $main_array;
		$data['filters'] = $merged_array;
		$this->load->view('downloadform');
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('hero',$data);
		$this->load->view('pagination',$count);
	}
}
