<?php
Class FilterModel extends CI_Model
{
   public function __construct()
   {
   parent::__construct();
   }

   public function city_filter($array)
   {

        $city_filters = $this->session->userdata('city_filters');
    
        function filter_by_city($college, $cities) {
            return in_array($college['city'], $cities);
        }



        if($this->session->userdata('city_filters'))
        {
            $filtered_colleges = array_filter($array, function($college) use ($city_filters) {
                return filter_by_city($college, $city_filters);
            });

            return $filtered_colleges;
        }
        else
        {
            return $array;
        }
    }

    public function type_filter($array)
   {

       
        $type_filters = $this->session->userdata('type_filters');
        

        function filter_by_type($college, $type) {
            return in_array($college['college_type'], $type);
        }



        if($this->session->userdata('type_filters'))
        {
            $filtered_colleges = array_filter($array, function($college) use ($type_filters) {
                return filter_by_type($college, $type_filters);
            });

            return $filtered_colleges;
        }
        else
        {
            return $array;
        }
    }

    public function mode_filter($array)
   {

        
        $mode_filters = $this->session->userdata('mode_filters');

        function filter_by_mode($college, $modes) {
            return in_array($college['mode'], $modes);
        }



        if($this->session->userdata('mode_filters'))
        {
            $filtered_colleges = array_filter($array, function($college) use ($mode_filters) {
                return filter_by_mode($college, $mode_filters);
            });

            return $filtered_colleges;
        }
        else
        {
            return $array;
        }
    }
    public function search($array,$search_key)
   {

        $filtered_colleges = array_filter($array, function($college) use ($search_key) {
        foreach($college as $field) {
            if (stripos($field, $search_key) !== false) {
                return true;
            }
        }
            return false;
        });

    return ($filtered_colleges);
    }
    

}