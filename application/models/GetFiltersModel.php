<?php
Class GetFiltersModel extends CI_Model
{
   public function __construct()
   {
   parent::__construct();
   }

   public function all()
   {
    $array =  $this->db->select('*')->get('colleges')->result_array();
    return $array;                                    
   }

   public function city()
   {
    $array = $this->db->select('city')->get('colleges')->result_array();                                    
    $newArray = array();
    foreach ($array as $subArray) {
        $newArray[] = $subArray['city'];
    }


    return array_unique($newArray);
   }
   public function mode()
   {

   }
    

}