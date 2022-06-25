<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	private $table = 't_mahasiswa';
	private $id = 't_mahasiswa.id';

	function get_all(){
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get_all();
		return $query->result();
	}
}