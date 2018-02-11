<?php
   Class MaterialModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("material", $data);
        }


       public function findAll() {
       $query = $this->db->get ("material");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("material",array("id"=>$id));
		$data = $query->result(); 
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("material", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("material", $data);
            }

   }
?>
