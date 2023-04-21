<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateManagement extends CI_Controller {

	public function index()	
	{
	}
    public function filters()
    {
		$city_filters = $this->input->post('city_filters');
		$mode_filters = $this->input->post('mode_filters');
		$type_filters = $this->input->post('type_filters');

        $this->session->set_userdata('city_filters', $city_filters);
        $this->session->set_userdata('mode_filters', $mode_filters);
        $this->session->set_userdata('type_filters', $type_filters);

        echo 'success';
    }
    public function remove_filter()
    {
		$filter = $this->input->post('filter');
        if($filter == 'Co-ed' || $filter == 'Girls' || $filter == 'Boys')
        {
            $newsession =  array_diff($this->session->userdata('type_filters'),array($filter));
            $this->session->set_userdata('type_filters', $newsession);
        }
        elseif($filter == "Part-time" || $filter == "Full-time")
        {
            $newsession =  array_diff($this->session->userdata('mode_filters'),array($filter));
            $this->session->set_userdata('mode_filters', $newsession);
        }
        else
        {
            $newsession =  array_diff($this->session->userdata('city_filters'),array($filter));
            $this->session->set_userdata('city_filters', $newsession);
        }

        

        echo 'success';
    }
    public function search()
    {
		$search = $this->input->post('search');
        $this->session->set_userdata('search', $search);
        echo 'success';
    }
    public function search_remove()
    {
		
        $this->session->set_userdata('search', '');
        echo 'success';
    }


        

    
}
