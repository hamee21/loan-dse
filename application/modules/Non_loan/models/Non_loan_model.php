<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Non_loan_model extends CI_Model
{
	private $table = 'non_loan';
	
	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);	
	}
	
	public function get_all()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$query = $this->db->get();
		
		$result = $query->num_rows()!=0? $query->result_array() : array();
		
		return $result;
	}
	
	public function get_by_id($id)
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where("non_loan_id", $id);
		$query = $this->db->get();
		
		$result = $query->num_rows()!=0? $query->row_array() : null;
		return $result;
	}
	
	private function get_max_id()
	{
		$this->db->select_max("non_loan_id");
		$query = $this->db->get($this->table);
		
		$result = $query->num_rows()!=0? $query->row_array() : null;
		return $result;
	}
	
	public function save($array, $id='')
	{
		if($id=='')
		{
			$result_id = $this->get_max_id();
			$id = $result_id==null? 1 : intval($result_id['non_loan_id']) + 1;
			
			$array['non_loan_id'] = $id;
    
			$this->db->set($array);
			$this->db->insert($this->table);
		}
		else
		{
			$this->db->where("non_loan_id", $id);
			$this->db->update($this->table, $array);
		}
		
		$num_row = $this->db->affected_rows();
		
		return array('id' => $id, 'rows' => $num_row);
	}
}
?>