<?php
class Admin_model extends CI_Model {

    function __construct()
    {
        
		// $this->load->library('database');
        $this->load->database();
        parent::__construct();
    }

    public function checkLogin($userName,$password)
    {
        $this->db->select('COUNT(*) AS Total, name, email, type, photo');
        $this->db->where("email = '". $userName ."' AND Password = '". $password ."' AND status = '1'");
        $q = $this->db->get('admin');
        return $q->result_array();
    }

    public function get_selected_from_join_where_groupby_orderby($selectData,$fromTable,$joinTable,$where,$orderby,$type,$groupBy)
    {
        $this->db->select($selectData);
        $this->db->from($fromTable);
        foreach($joinTable as $row=>$item)
        {
            $this->db->join($row,$item);
        }
        $this->db->where($where);	
        $this->db->order_by($orderby,$type);
        $this->db->group_by($groupBy);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllDataJoin($selectData,$fromTable,$joinTable,$where,$orderby,$type){
        $this->db->select($selectData);
        $this->db->from($fromTable);
        foreach($joinTable as $row=>$item)
        {
            $this->db->join($row,$item);
        }
        $this->db->where($where);	
        $this->db->order_by($orderby,$type);
        $query = $this->db->get();
        return $query->result();
    }

    public function insertData($tableName, $data)
    {        
        $this->db->insert($tableName, $data);
    }
}
?>