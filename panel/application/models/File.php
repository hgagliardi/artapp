<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{

    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from('items');
        if($id){
            $this->db->where('items_id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('items_fecha','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    public function insert($data = array()){
        $insert = $this->db->insert_batch('items',$data);
        return $insert?true:false;
    }

  }
