<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class BaseController extends CI_Controller {
  function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('users');
		}
		else {
      $this->nama = $this->session->userdata('nama');
      $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) {
					if (!in_array($this->session->userdata('level'), $user_level)) {
						redirect('home');
					}
				}
				else {
					if ($this->session->userdata('level') != $user_level){
						redirect('users');
					}
				}
			}
		}
	}
}
