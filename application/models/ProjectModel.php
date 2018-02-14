<?php
   Class projectModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("project", $data);
        }


       public function findAll() {
       $query = $this->db->get ("project");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("project",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("project", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("project", $data);
            }

   }
?>
