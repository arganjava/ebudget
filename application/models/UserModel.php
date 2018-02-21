<?php
   Class UserModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }


       public function findAll() {
        $query = $this->db->get ("user");
               return $query->result();
       }


   }
?>
