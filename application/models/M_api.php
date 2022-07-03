<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_api extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function login($email="", $password=""){
        $query = $this->db->where('email', $email);
        $query = $this->db->where('password', md5($password));
        $query = $this->db->get('db_user');
		return $query;
	}
    public function dataposting(){
        $query = $this->db->order_by('id_posting', 'ASC');
        $query = $this->db->get('view_posting');
		$data = [];
		$no=1;
		foreach($query->result() as $row) {
            if(!$this->session->userdata('dataLogin')){
                $option = '<div>
                            <a href="javascript:void(0);" dataId="'.$row->id_posting.'" class="view" data-bs-toggle="modal" data-bs-target="#content-popup">View</a>
                        </div>';
            }else{
                $option = '<div class="logout">
                            <a href="javascript:void(0);" dataId="'.$row->id_posting.'" class="view" data-bs-toggle="modal" data-bs-target="#content-popup">View</a>
                            &nbsp;|&nbsp;
                            <a href="javascript:void(0);" dataId="'.$row->id_posting.'" dataSelect="'.$row->post_type.'" class="update" data-bs-toggle="modal" data-bs-target="#content-popup">Update</a>
                            &nbsp;|&nbsp;
                            <a href="javascript:void(0);" dataId="'.$row->id_posting.'" class="delete" style="color:red;">Delete</a>
                        </div>';
            }
			$data[] = array(
                $no,
                $row->title_posting,
                $row->jenis_postType,
                $row->fullName,
                $option,
			);
			$no++;
		}
		$draw = intval($this->input->get("draw"));
		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);
		return $result;
	}
    public function datatypepost(){
        $query = $this->db->order_by('id_postType', 'ASC');
        $query = $this->db->get('db_post_type');
		$data = [];
		$no=1;
		foreach($query->result() as $row) {
			$data[] = array(
                $no,
                $row->jenis_postType,
                $row->type_post,
				'<div class="logout">
					<a href="javascript:void(0);" dataJenis="'.$row->jenis_postType.'" dataType="'.$row->type_post.'" dataId="'.$row->id_postType.'" class="updateTP" data-bs-toggle="modal" data-bs-target="#type-update">Update</a>
					&nbsp;|&nbsp;
					<a href="javascript:void(0);" dataId="'.$row->id_postType.'" class="deleteTP" style="color:red;">Delete</a>
				</div>',
			);
			$no++;
		}
		$draw = intval($this->input->get("draw"));
		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);
		return $result;
	}
    public function datauser(){
		$userId = $this->session->userdata('dataLogin')['id_user'];
        $query = $this->db->order_by('idUser', 'ASC');
        $query = $this->db->get('db_user');
		$data = [];
		$no=1;
		foreach($query->result() as $row) {
			if($userId != $row->idUser){
				$delete = '&nbsp;|&nbsp;<a href="javascript:void(0);" dataId="'.$row->idUser.'" class="deleteUser" style="color:red;">Delete</a>';
			}else{
				$delete = "";
			}
			$data[] = array(
                $no,
                $row->fullName,
                $row->phone,
                $row->email,
                $row->vallPass,
				'<div class="logout">
					<a href="javascript:void(0);" dataId="'.$row->idUser.'" dataName="'.$row->fullName.'" dataphone="'.$row->phone.'" dataemail="'.$row->email.'" datavallPass="'.$row->vallPass.'" class="updateUser" data-bs-toggle="modal" data-bs-target="#update-user">Update</a>
					'.$delete.'
				</div>',
			);
			$no++;
		}
		$draw = intval($this->input->get("draw"));
		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);
		return $result;
	}
    public function typepost(){
        $query = $this->db->order_by('id_postType', 'ASC');
        $query = $this->db->get('db_post_type');
		$data = [];
		$no=1;
		foreach($query->result() as $row) {
			$data[] = array(
                $no,
                $row->jenis_postType,
                $row->type_post,
			);
			$no++;
		}
		$draw = intval($this->input->get("draw"));
		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);
		return $result;
	}
}
?>