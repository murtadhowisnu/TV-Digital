<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  ORDER BY `user_menu`.`menu` ASC
                ";
        return $this->db->query($query)->result_array();
    }
    function subMenuEdit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
        return TRUE;
    }
    function petugasEdit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        return TRUE;
    }
    function ukurEdit1($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('1pengukuran_ket', $data);
        return TRUE;
    }
    function ukurEdit2($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('2pengukuran_stasiun', $data);
        return TRUE;
    }
    function ukurEdit3($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('3pengukuran_lokasi', $data);
        return TRUE;
    }
    function ukurEdit4($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('4pengukuran_spek_pem', $data);
        return TRUE;
    }
    function ukurEdit5($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('5pengukuran_spek_ant', $data);
        return TRUE;
    }
    function ukurEdit6($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('6pengukuran_hasil', $data);
        return TRUE;
    }
    function ukurEdit7($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('7pengukuran_harmonisa', $data);
        return TRUE;
    }
    function ukurEdit8($data, $id)
    {
        $this->db->where('no_spt', $id);
        $this->db->update('8pengukuran_ket_akhir', $data);
        return TRUE;
    }
}
