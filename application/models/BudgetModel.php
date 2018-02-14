<?php
   Class BudgetModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("budget", $data);
        }


       public function findAll() {
       $query = $this->db->get ("budget");
               return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("budget",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

            public function delete($id) {
                $this->db->delete("budget", "id = ".$id);
            }

            public function update($data,$id) {
               $this->db->set($data);
               $this->db->where("id", $id);
               $this->db->update("budget", $data);
            }

   }
?>
