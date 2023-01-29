<?php
class Multiple_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function create_multiple_table($pengukuran_info,$pengukuran_hasil){
        $this->db->insert('pengukuran_info',$pengukuran_info);
        $pengukuran_id = $this->db->insert_id();
        
        //insert into isr table
        $pengukuran_hasil['id'] = $pengukuran_id;
        $this->db->insert('pengukuran_hasil',$pengukuran_hasil);
        return $insert_id = $this->db->insert_id();
    }

}