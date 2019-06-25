<?php
	class M_tentang extends CI_Model{

		function get_all_tentang(){
			$hsl=$this->db->query("SELECT tbl_tentang.*,kategori_tentang_nama FROM tbl_tentang join tbl_kategori_tentang on tentang_kategori_id=kategori_tentang_id ORDER BY tentang_id DESC");
			return $hsl;
		}

		function get_tentang_by_kategori($idkategori){
			$hsl=$this->db->query("SELECT tbl_tentang.*,DATE_FORMAT(tentang_tanggal,'%d/%m/%Y') AS tanggal,kategori_tentang_nama FROM tbl_tentang join tbl_kategori_tentang on tentang_kategori_id=kategori_tentang_id WHERE tentang_kategori_id='$idkategori' ORDER BY tentang_id DESC");
			return $hsl;
		}

		function simpan_tentang($nama,$kategori){
			$hsl=$this->db->query("INSERT into tbl_tentang(tentang_nama,tentang_jabatan,tentang_bijak,tentang_gambar,link_option_1,link_option_2,tentang_kategori_id) values ('$nama','$jabatan','$bijak','$gambar','$option1','$option2','$kategori')");
			return $hsl;
		}

		function update_tentang($tentang_id,$nama,$kategori){
			$hsl=$this->db->query("UPDATE tbl_tentang set tentang_nama='$nama',tentang_jabatan='$jabatan',tentang_bijak='$bijak',tentang_gambar='$gambar',link_option_1='$option1',link_option_2='$option2',tentang_kategori_id='$kategori' where tentang_id='$tentang_id'");
			return $hsl;
		}

		function hapus_tentang($kode){
			$hsl=$this->db->query("DELETE from tbl_tentang where tentang_id='$kode'");
			return $hsl;
		}
	}
?>