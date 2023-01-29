<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function createExcel($id)
    {
        $masuk = $this->db->get_where('1pengukuran_ket', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $stasiun = $this->db->get_where('2pengukuran_stasiun', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $lokasi = $this->db->get_where('3pengukuran_lokasi', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $spek = $this->db->get_where('4pengukuran_spek_pem', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $ant = $this->db->get_where('5pengukuran_spek_ant', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $hasil = $this->db->get_where('6pengukuran_hasil', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $harmonisa = $this->db->get_where('7pengukuran_harmonisa', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $ket_a = $this->db->get_where('8pengukuran_ket_akhir', ['user_id' => $this->session->userdata('id'), 'id' => $id])->row_array();
        $fileName = 'HasilPengukuran.xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A', 'UPT');
        $sheet->setCellValue('B', 'Tanggal');
        $sheet->setCellValue('C', 'Provinsi');
        $sheet->setCellValue('D', 'Kab/Kota');
        foreach ($masuk as $val) {
            $sheet->setCellValue('A1', $val['upt']);
            $sheet->setCellValue('B2', $val['tanggal']);
            $sheet->setCellValue('C3', $val['provinsi']);
            $sheet->setCellValue('D4', $val['kabkota']);
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/" . $fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url() . "/upload/" . $fileName);
    }
}
