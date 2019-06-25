<?php
class Album extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Login');
            redirect($url);
        };
		$this->load->model('m_album');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_album->get_all_album();
		$y['title'] = 'Kategori Album';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_album',$x);
	}
	
	function simpan_album(){
		$album_nama=strip_tags($this->input->post('xnama_album'));
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$p=$user->row_array();
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$this->m_album->simpan_album($album_nama,$user_id,$user_nama);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Album');
				
	}
	
	function update_album(){
		$album_nama=strip_tags($this->input->post('xnama_album'));
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$p=$user->row_array();
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$this->m_album->update_album($album_id,$album_nama,$user_id,$user_nama);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Album');
	}

	function hapus_album(){
		$kode=$this->input->post('kode');
		$this->m_album->hapus_album($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Album');
	}

}