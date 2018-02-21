<?php
   Class CustomerModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }


       public function findAll() {
        $query = $this->db->get ("customer");
               return $query->result();
       }


   }
?>
