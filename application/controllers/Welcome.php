<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		setlocale(LC_TIME, 'id_ID.utf8');
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('m_api');
	}
	public function index()
	{
		$data = array(
			'post_type' => $this->db->get('db_post_type'),
		);
		$this->load->view('welcome_message', $data);
	}
	public function login()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$email = $this->security->xss_clean($this->input->post('emailLogin'));
			$password = $this->security->xss_clean($this->input->post('passLogin'));
			$result = $this->m_api->login($email, $password);
			if(! $result->num_rows() == 1){
				$this->response(array(
					'status' => 'fail',
					'msg' => 'Username atau Password yang anda masukan tidak ada yang cocok!'),
				);
			}else{
				$data_session = array(
					'id_user' => $result->row()->idUser,//dont delete
					'name' => ucwords($result->row()->fullName),
					'email' => $result->row()->email
					);
				$this->session->set_userdata('dataLogin',$data_session);
				$this->response(array(
					'status' => 'success',
					'msg' => ucwords($result->row()->fullName),
				));
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
	}
	public function logout()
	{
        $this->session->sess_destroy('dataLogin');
		redirect(base_url(), 'refresh');
	}
	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$nameRegister = $this->security->xss_clean($this->input->post('nameRegister'));
			$phoneRegister = $this->security->xss_clean($this->input->post('phoneRegister'));
			$emailRegister = $this->security->xss_clean($this->input->post('emailRegister'));
			$passRegister = $this->security->xss_clean($this->input->post('passRegister'));
			$checkphone = $this->db->where('phone', $phoneRegister);
			$queryphone = $this->db->get('db_user');
			$checkemail = $this->db->where('email', $emailRegister);
			$queryemail = $this->db->get('db_user');
			if(! $queryemail->num_rows() == 1 && ! $queryphone->num_rows() == 1){
					$data = array(
						'fullName' => $nameRegister,
						'phone' => $phoneRegister,
						'email' => $emailRegister,
						'vallPass' => $passRegister,
						'password' => md5($passRegister),
						);
					$this->db->insert('db_user', $data);
					if($this->db->affected_rows() == 1){
						$result = array(
							"status" => 'success',
							"msg" => 'User berhasil disimpan!',
						);
					}else{
						$result = $this->session->set_flashdata('failRegister','User gagal disimpan!');
					}
			}else if($queryphone->num_rows() == 1){
				$result = array(
					"status" => 'failed',
					"msg" => 'Nomor Handphone sudah terdaftar.',
				);
			}else if($queryemail->num_rows() == 1){
				$result = array(
					"status" => 'failed',
					"msg" => 'Alamat email sudah terdaftar.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}

	public function typeposting()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$jenisTP = $this->security->xss_clean($this->input->post('jenisTP'));
			$typeTP = $this->security->xss_clean($this->input->post('typeTP'));
			
			$data = array(
				'jenis_postType' => $jenisTP,
				'type_post' => $typeTP,
				);
			$this->db->insert('db_post_type', $data);
			if($this->db->affected_rows() == 1){
				$result = array(
					"status" => 'success',
					"msg" => 'Type Post berhasil disimpan.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Type Post gagal disimpan.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function typepostingupdate()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$idTP = $this->security->xss_clean($this->input->post('idTP'));
			$jenisTP = $this->security->xss_clean($this->input->post('jenisTP'));
			$typeTP = $this->security->xss_clean($this->input->post('typeTP'));
			
			$data = array(
				'jenis_postType' => $jenisTP,
				'type_post' => $typeTP,
				);
			$this->db->trans_start();
				$this->db->where('id_postType', $idTP);
				$this->db->update('db_post_type', $data);
			$this->db->trans_complete();
			if($this->db->trans_status() !== FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Berhasil ubah data Type Post.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Gagal ubah data Type Post.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function updateUser()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$id_user = $this->security->xss_clean($this->input->post('id_user'));
			$fullName = $this->security->xss_clean($this->input->post('nameRegister'));
			$phone = $this->security->xss_clean($this->input->post('phoneRegister'));
			$email = $this->security->xss_clean($this->input->post('emailRegister'));
			$vallPass = $this->security->xss_clean($this->input->post('passRegister'));
			
			$data = array(
				'fullName' => $fullName,
				'phone' => $phone,
				'email' => $email,
				'vallPass' => $vallPass,
				'password' => md5($vallPass),
				);
			$this->db->trans_start();
				$this->db->where('idUser', $id_user);
				$this->db->update('db_user', $data);
			$this->db->trans_complete();
			if($this->db->trans_status() !== FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Berhasil ubah data User.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Gagal ubah data User.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$titleCreate = $this->security->xss_clean($this->input->post('titleCreate'));
			$deskripsiCreate = $this->security->xss_clean($this->input->post('deskripsiCreate'));
			$typeCreate = $this->security->xss_clean($this->input->post('typeCreate'));
			$userId = $this->session->userdata('dataLogin')['id_user'];
			
			$data = array(
				'title_posting' => $titleCreate,
				'description' => $deskripsiCreate,
				'post_type' => $typeCreate,
				'user_id' => $userId,
				);
			$this->db->insert('db_posting', $data);
			if($this->db->affected_rows() == 1){
				$result = array(
					"status" => 'success',
					"msg" => 'Artikel berhasil disimpan.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Artikel gagal disimpan.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function update()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$titleUpdate = $this->security->xss_clean($this->input->post('titleUpdate'));
			$deskripsiUpdate = $this->security->xss_clean($this->input->post('deskripsiUpdate'));
			$typeUpdate = $this->security->xss_clean($this->input->post('typeUpdate'));
			$userId = $this->session->userdata('dataLogin')['id_user'];
			
			$data = array(
				'title_posting' => $titleUpdate,
				'description' => $deskripsiUpdate,
				'post_type' => $typeUpdate,
				'user_update' => $userId,
				);
			$this->db->trans_start();
				$this->db->where('id_posting', $this->uri->segment(2));
				$this->db->update('db_posting', $data);
			$this->db->trans_complete();
			if($this->db->trans_status() !== FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Berhasil ubah data posting.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Gagal ubah data posting.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function dataposting()
	{
		$result = $this->m_api->dataposting();
		if($result) {
			$this->response($result, 200);
		} else {
			$this->response(array('status' => 'fail','msg' => 'Something Error!'),502);
		}
	}
	public function datatypepost()
	{
		$result = $this->m_api->datatypepost();
		if($result) {
			$this->response($result, 200);
		} else {
			$this->response(array('status' => 'fail','msg' => 'Something Error!'),502);
		}
	}
	public function datauser()
	{
		$result = $this->m_api->datauser();
		if($result) {
			$this->response($result, 200);
		} else {
			$this->response(array('status' => 'fail','msg' => 'Something Error!'),502);
		}
	}
	public function typepost()
	{
		$result = $this->m_api->typepost();
		if($result) {
			$this->response($result, 200);
		} else {
			$this->response(array('status' => 'fail','msg' => 'Something Error!'),502);
		}
	}
	public function viewTypepost()
	{
		$data = array(
			'session' => $this->session->userdata('dataLogin'),
			'post_type' => $this->db->get('db_post_type'),
		);
		$this->load->view('viewtypepost', $data);
	}
	public function viewUser()
	{
		$data = array(
			'session' => $this->session->userdata('dataLogin'),
			'post_type' => $this->db->get('db_user'),
		);
		$this->load->view('viewuser', $data);
	}
	public function viewArticle()
	{
        $article = $this->db->where('id_posting', $this->uri->segment(2));
        $queryarticle = $this->db->get('view_posting')->row();
		$data = array(
			'session' => $this->session->userdata('dataLogin'),
			'article' => $queryarticle,
			'post_type' => $this->db->get('db_post_type'),
		);
		$this->load->view('viewarticle', $data);
	}
	public function updateArticle()
	{
        $article = $this->db->where('id_posting', $this->uri->segment(2));
        $queryarticle = $this->db->get('view_posting')->row();
		$data = array(
			'session' => $this->session->userdata('dataLogin'),
			'article' => $queryarticle,
			'post_type' => $this->db->get('db_post_type'),
		);
		$this->load->view('updatearticle', $data);
	}
	public function delete()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->db->trans_start();
				$this->db->where('id_posting', $this->security->xss_clean($this->input->post('dataId')));
				$this->db->delete('db_posting');
			$this->db->trans_complete();
			if($this->db->trans_status() != FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Data telah dihapus.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Data Gagal dihapus.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function deleteTP()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->db->trans_start();
				$this->db->where('id_postType', $this->security->xss_clean($this->input->post('dataId')));
				$this->db->delete('db_post_type');
			$this->db->trans_complete();
			if($this->db->trans_status() != FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Data telah dihapus.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Data Gagal dihapus.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	public function deleteUser()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->db->trans_start();
				$this->db->where('idUser', $this->security->xss_clean($this->input->post('dataId')));
				$this->db->delete('db_user');
			$this->db->trans_complete();
			if($this->db->trans_status() != FALSE)
			{
				$result = array(
					"status" => 'success',
					"msg" => 'Data telah dihapus.',
				);
			}else{
				$result = array(
					"status" => 'failed',
					"msg" => 'Data Gagal dihapus.',
				);
			}
		}else{
			$result = array(
				"status" => 'Error',
				"msg" => 'Access denied!.',
			);
		}
		return $this->response($result);
	}
	private function response($json='', $header=200)
	{
		$this->output
				->set_status_header($header)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
				->_display();
		exit;
	}
}
