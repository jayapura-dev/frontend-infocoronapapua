<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function  __construct()
  {
      parent::__construct();
      $this->kawalcorona = "https://api.kawalcorona.com";
      $this->load->library('curl');
      $this->load->helper('form','url');
      $this->load->model('M_home');
  }

  public function index()
  {
      $this->load->library('indo_tanggal');
      $data['title'] = 'Info Corona Papua | Live Data Indonesia & Papua';
      $data['suspect'] = $this->M_home->rekap_suspect();
      $data['prosentase'] = $this->M_home->prosentase_suspect();
      $data['datasuspect'] = $this->db->query("SELECT * FROM v_suspect ")->result();
      $data['sus'] = $this->M_home->rekapkabkota();
      $data['suskab'] = $this->M_home->suspect_kabkota();
      $data['jumlah_harian'] = $this->db->query("SELECT * FROM v_suspect_harian")->result();
      $data['tambah_harian'] = $this->M_home->get_tambahan();
      $data['dataindo'] = json_decode($this->curl->simple_get($this->kawalcorona.'/indonesia'));
      $data['dataprovinsi'] = json_decode($this->curl->simple_get($this->kawalcorona.'/indonesia/provinsi'));
      $this->template->load('frontend_site','page/home',$data);
  }

  public function hotline()
  {
    $data['title'] = 'Hotline Covid 19 Papua';
    $this->template->load('frontend_site','page/hotline',$data);
  }

  public function api()
  {
    $data['title'] = 'API For Developers';
    $this->template->load('frontend_site','page/api',$data);
  }

  public function get_suspect_kabkota($id_kabupaten)
  {
    $data['kabkotasuspect'] = $this->M_home->get_suspect_kabkota($id_kabupaten);
    $data['kabupaten'] = $this->db->query("SELECT * FROM tb_kabupaten WHERE id_kabupaten = '$id_kabupaten'")->row_array();
    $data['countsuspect'] = $this->M_home->get_count_suspect($id_kabupaten);
    $data['prosuspect'] = $this->M_home->get_porsentase_suspect($id_kabupaten);
    $this->load->view('r-kabkota-suspect',$data);
  }

  public function papua()
  {
    $data = $this->db->query("SELECT * FROM v_maps_kabupaten_suspect")->result();
    echo json_encode($data);
  }
}