<?php
   Class PartnerModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("partner", $data);
        }


       public function findAll() {
       $query = $this->db->get ("partner");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("partner",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("partner", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("partner", $data);
            }

   }
?>
