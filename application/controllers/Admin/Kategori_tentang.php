<?php
class Kategori_tentang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Login');
            redirect($url);
        };
		$this->load->model('m_kategori_tentang');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kategori_tentang->get_all_kategori();
		$y['title'] = 'Kategori Tentang Tulisan';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_kategori_tentang',$x);
	}

	function simpan_kategori(){
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori_tentang->simpan_kategori($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Kategori_tentang');
	}

	function update_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategori'));
		$this->m_kategori_tentang->update_kategori($kode,$kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('Admin/Kategori_tentang');
	}
	function hapus_kategori(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kategori_tentang->hapus_kategori($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Kategori_tentang');
	}

}