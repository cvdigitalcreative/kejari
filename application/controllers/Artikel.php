<?php 
	/**
	* 
	*/
	class Artikel extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_tulisan');
		}

		function index()
		{
			$jum=$this->m_tulisan->berita();
	        $page=$this->uri->segment(3);
	        if(!$page):
	            $offset = 0;
	        else:
	            $offset = $page;
	        endif;
	        $limit=4;
	        $config['base_url'] = base_url() . 'artikel/index';
	        $config['total_rows'] = $jum->num_rows();
	        $config['per_page'] = $limit;
	        $config['uri_segment'] = 3;
	        $config['full_tag_open'] = "<ul class='pagination'>";
		    $config['full_tag_close'] = '</ul>';
		    $config['num_tag_open'] = '<li>';
		    $config['num_tag_close'] = '</li>';
		    $config['cur_tag_open'] = '<li class="active"><a href="#">';
		    $config['cur_tag_close'] = '</a></li>';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';
		    $config['first_tag_open'] = '<li>';
		    $config['first_tag_close'] = '</li>';
		    $config['last_tag_open'] = '<li>';
		    $config['last_tag_close'] = '</li>';
		    
		    $config['prev_link'] = 'Previous Page';
		    $config['prev_tag_open'] = '<li>';
		    $config['prev_tag_close'] = '</li>';


		    $config['next_link'] = 'Next Page';
		    $config['next_tag_open'] = '<li>';
		    $config['next_tag_close'] = '</li>';
		    $y['title'] = 'Artikel';
	        $this->pagination->initialize($config);
	        $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_tulisan->berita_perpage($offset,$limit);
			$x['data1']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_artikel',$x);
			$this->load->view('v_footer');
	 	}

	 	function detail($slug)
	 	{
	 		
			$data=$this->m_tulisan->get_berita_by_slug($slug);
			$q=$data->row_array();
			$judul=$q['tulisan_judul'];
			$y['title'] = $judul;
			$x['data']=$this->m_tulisan->get_berita_by_slug($slug);
			$x['data1']=$this->m_tulisan->get_tulisan_by_kategori_limit(1,3);
			$this->load->view('v_header1',$y);
			$this->load->view('v_artikel_detail',$x);
			$this->load->view('v_footer');
		}
}
?>