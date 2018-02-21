<?php
   Class ProjectModel extends CI_Model {

      Public function __construct() {
         parent::__construct();
      }

       public function insert($data) {
        $this->db->insert("project", $data);
        }


       public function findAll() {
        $this->db->select('distinct(project.project_id), project.date, project.confirm, project.project_name, project.pic, project.term, project.propose_value  , sum((material.buying_price * material_project.qty)+ (partner.price * manpower_project.qty) ) total');
        $this->db->from('project');
        $this->db->join('material_project', 'material_project.project_id = project.project_id');
        $this->db->join('material', 'material_project.material_id = material.id');
        $this->db->join('manpower_project', 'manpower_project.project_id = project.project_id');
        $this->db->join('partner', 'manpower_project.partner_id = partner.id');
        $this->db->group_by('project.project_id, project.date, project.confirm, project.project_name, project.pic, material.buying_price, project.term');        
        $query = $this->db->get();
        return $query->result();
       }

       public function findAllConfirmY() {
        $this->db->select('distinct(project.project_id), project.date, project.confirm, project.project_name, project.pic, project.term, project.propose_value  , sum((material.buying_price * material_project.qty)+ (partner.price * manpower_project.qty) ) total');
        $this->db->from('project');
        $this->db->join('material_project', 'material_project.project_id = project.project_id');
        $this->db->join('material', 'material_project.material_id = material.id');
        $this->db->join('manpower_project', 'manpower_project.project_id = project.project_id');
        $this->db->join('partner', 'manpower_project.partner_id = partner.id');
        $this->db->where('confirm', 'Y');
        $this->db->group_by('project.project_id, project.date, project.confirm, project.project_name, project.pic, material.buying_price, project.term');        
        $query = $this->db->get();
        return $query->result();
       }

        public function findById($id) {
                $query = $this->db->get_where("project",array("id"=>$id));
		$data = $query->result();
                return $data[0];
        }

        public function processAddRowMaterial($id, $qty) {
                $query = $this->db->get_where("material",array("id"=>intval($id)));
                $data = $query->result();
                $material = $data[0];
                $data = (object) array();
                $data->id = $material->id;
                $data->name = $material->name;
                $data->qty = $qty;
                $data->est_price = $material->buying_price;
                $data->est_cost = $material->buying_price * intval($qty);
                return $data;
        }

        public function processAddRowPartner($id, $qty) {
                $query = $this->db->get_where("partner",array("id"=>intval($id)));
                $data = $query->result();
                $partner = $data[0];
                $data = (object) array();
                $data->id = $partner->id;
                $data->name = $partner->name;
                $data->qty = $qty;
                $data->est_price = $partner->price;
                $data->est_cost = $partner->price * intval($qty);
                return $data;
        }

            public function processInsert($data, $materials, $manpowers) {
                $this->db->trans_start();
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert("project", $data);
                $project_id = $this->db->insert_id();

                foreach($materials as $row){
                        $data = array(
                                'qty' => $row->qty,
                                'project_id' => $project_id,
                                'material_id' => $row->id
                         );
                         $this->db->insert("material_project", $data);
                }

                foreach($manpowers as $row){
                        $data = array(
                                'qty' => $row->qty,
                                'project_id' => $project_id,
                                'partner_id' => $row->id
                         );
                         $this->db->insert("manpower_project", $data);
                }
                $this->db->trans_complete();                
        }

            public function confirm($id) {
                $data = array(
                        'confirm' => "Y"
                 );
               $this->db->set($data);
               $this->db->where("project_id", $id);
               $this->db->update("project", $data);
            }

   }
?>
