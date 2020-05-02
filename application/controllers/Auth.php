<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0 ) {
				$row = $query->row();
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."';
					</script>";
			}else {
				echo "<script>
					alert('Login gagal, username atau password salah');
					window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}
}
