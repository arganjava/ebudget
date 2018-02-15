<?php
   Class SupplierModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("supplier", $data);
        }


       public function findAll() {
       $query = $this->db->get ("supplier");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("supplier",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("supplier", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("supplier", $data);
            }

   }
?>
