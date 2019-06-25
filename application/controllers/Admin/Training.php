<?php 
 /**
  * 
  */
 class Training extends CI_Controller
 {
 	
 	
		function __construct()
	  	{
		    parent:: __construct();
		    if($this->session->userdata('masuk') !=TRUE){
		      $url=base_url('Login');
		      redirect($url);
		    };

		    $this->load->model('m_training');
	  	}

	  	function index(){
	  		if($this->session->userdata('akses') == 1 && $this->session->userdata('masuk') == true){
		       $y['title'] = "Training";
		       $x['training'] = $this->m_training->getAllTraining();
		       $this->load->view('admin/v_header',$y);
		       $this->load->view('admin/v_sidebar');
		       $this->load->view('admin/v_training',$x);
		    }
		    else{
		       redirect('Login');
		    }
	  	}

	  	function savetraining(){
	  		$nama = $this->input->post('nama');
	  		$this->m_training->save_Training($nama);
	  		echo $this->session->set_flashdata('msg','success');
	       	redirect('Admin/Training');
	  	}

	  	function updatetraining(){
	  		$id = $this->input->post('id');
	  		$nama = $this->input->post('nama');
	  		$this->m_training->update_Training($id,$nama);
	  		echo $this->session->set_flashdata('msg','update');
	       	redirect('Admin/Training');
	  	}

	  	function hapustraining(){
	  		$id = $this->input->post('id');
	  		$this->m_training->hapus_Training($id);
	  		echo $this->session->set_flashdata('msg','delete');
	       	redirect('Admin/Training');
	  	}
 }

?>