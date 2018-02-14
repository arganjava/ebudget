<?php
   Class ProjectModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("project", $data);
        }


       public function findAll() {
        $this->db->select('distinct(project.project_id), project.date, project.confirm, project.project_name, project.pic, project.term, project.propose_value  , sum((material.buying_price * material_project.qty)+ (manpower_project.price * manpower_project.qty) ) total');
        $this->db->from('project');
        $this->db->join('material_project', 'material_project.project_id = project.project_id');
        $this->db->join('material', 'material_project.material_id = material.id');
        $this->db->join('manpower_project', 'manpower_project.project_id = project.project_id');
        $this->db->join('partner', 'manpower_project.partner_id = partner.id');
        $this->db->group_by('project.project_id, project.date, project.confirm, project.project_name, project.pic, material.buying_price, project.term');        
        $query = $this->db->get();
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
