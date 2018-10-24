
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class sell_car_model extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function select_make()
		{
			$this->db->select('*');
			$this->db->from('makes');
			$this->db->where('type','premium');
			$query=$this->db->get();
			return $query->result();
			
			
			
			
		}
		public function select_model($make_id)
		{
			
			$this->db->select('*');
			$this->db->from('make_models');
			$this->db->where('make_id',$make_id);
			$query=$this->db->get();
			return $query->result();
			
		}
		
	}
	?>
 