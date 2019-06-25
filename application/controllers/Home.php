<?php
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_tulisan');
		}

		function index(){
			$y['title']="Kejaksaan Negeri - Sumatera Selatan";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header',$y);
			$this->load->view('v_home',$x);
			$this->load->view('v_footer');
		}

		function kata_sambutan(){
			$y['title']="Kata Sambutan";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_kata_sambutan',$x);
			$this->load->view('v_footer');
		}

		function pejabat_struktural(){
			$y['title']="Pejabat Struktural";
			$this->load->view('v_header1',$y);
			$this->load->view('v_pejabat_struktural');
			$this->load->view('v_footer');
		}

		function perintah_harian(){
			$y['title']="Perintah Harian Jaksa Agung RI";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_perintah',$x);
			$this->load->view('v_footer');
		}

		function struktur(){
			$y['title']="Struktur Organisasi";
			$this->load->view('v_header1',$y);
			$this->load->view('v_struktur');
			$this->load->view('v_footer');
		}

		function profil(){
			$y['title']="Profil Kejari Sumsel";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_kejari',$x);
			$this->load->view('v_footer');
		}

		function visi_misi(){
			$y['title']="Visi & Misi";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_visi_misi',$x);
			$this->load->view('v_footer');
		}

		function peraturan(){
			$y['title']="Peraturan";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_peraturan',$x);
			$this->load->view('v_footer');
		}

		function layanan_hukum(){
			$y['title']="Layanan Hukum";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_layanan_hukum',$x);
			$this->load->view('v_footer');
		}

		function pidana_umum(){
			$y['title']="Pidana Umum";
			$x['data']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_pidana_umum',$x);
			$this->load->view('v_footer');
		}

	}
?>