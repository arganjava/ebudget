<?php
   Class UserModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("user", $data);
        }


       public function findAll() {
       $query = $this->db->get ("user");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("user",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("user", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("user", $data);
            }

   }
?>
