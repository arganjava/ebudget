<?php
   Class Material_PurchaseModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("material_purchase", $data);
        }


       public function findAll() {
       $query = $this->db->get ("material_purchase");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("material_purchase",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("material_purchase", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("material_purchase", $data);
            }

   }
?>
