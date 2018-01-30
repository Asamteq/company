<?php 
class Company_model extends CI_Model {

      
      public function save_record($data)
        {
          $this->db->insert('contact_us', $data);      
          return true;
        }

     
}
?>