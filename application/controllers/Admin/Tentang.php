<?php
class Tentang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('Login');
            redirect($url);
        };
		$this->load->model('m_pengguna');
		$this->load->model('m_tentang');
		$this->load->model('m_kategori_tentang');
		$this->load->library('upload');
	}


	function index(){	
		$x['data']=$this->m_tentang->get_all_tentang();
		$x['ktg_tentang'] = $this->m_kategori_tentang->get_all_kategori();
		$y['title'] = 'Tentang';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tentang',$x);
	}
	
	function simpan_tentang(){
			
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size'] = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
							$kategori=strip_tags($this->input->post('xkategori_tentang'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$bijak=strip_tags($this->input->post('xbijak'));
							$option1=$this->input->post('xoption1');
							$option2=$this->input->post('xoption2');
							
							$this->m_tentang->simpan_tentang($nama,$jabatan,$bijak,$gambar,$option1,$option2,$kategori);
							echo $this->session->set_flashdata('msg','success');
							redirect('Admin/Tentang');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Tentang');
	                }
	                 
	            }else{
					redirect('Admin/Tentang');
				}      
	}
	
	function update_tentang(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size']             = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$kategori=strip_tags($this->input->post('xkategori_tentang'));
							$bijak=strip_tags($this->input->post('xbijak'));
							$option1=$this->input->post('xoption1');
							$option2=$this->input->post('xoption2');
	                        $tentang_id=$this->input->post('kode');
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							unlink($path);
							$this->m_tentang->update_tentang($tentang_id,$nama,$jabatan,$bijak,$gambar,$option1,$option2,$kategori);
							echo $this->session->set_flashdata('msg','info');
							redirect('Admin/Tentang');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Tentang');
	                }
	                
	            }else{
							$tentang_id=$this->input->post('kode');
	                        $nama=strip_tags($this->input->post('xnama'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$kategori=strip_tags($this->input->post('xkategori_tentang'));
							$bijak=strip_tags($this->input->post('xbijak'));
							$option1=$this->input->post('xoption1');
							$option2=$this->input->post('xoption2');
							$this->m_tentang->update_tentang_tnp_img($tentang_id,$nama,$jabatan,$bijak,$option1,$option2,$kategori);
							echo $this->session->set_flashdata('msg','info');
							redirect('Admin/Tentang');
	            } 
	}

	function hapus_tentang(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_tentang->hapus_tentang($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Tentang');
	}

}