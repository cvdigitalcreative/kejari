<?php
class M_kategori_tentang extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("SELECT * from tbl_kategori_tentang");
		return $hsl;
	}

	function simpan_kategori($kategori){
		$hsl=$this->db->query("INSERT into tbl_kategori_tentang(kategori_tentang_nama) values('$kategori')");
		return $hsl;
	}
	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("UPDATE tbl_kategori_tentang set kategori_tentang_nama='$kategori' where kategori_tentang_id='$kode'");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("DELETE from tbl_kategori_tentang where kategori_tentang_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("SELECT * from tbl_kategori_tentang where kategori_tentang_id='$kategori_id'");
		return $hsl;
	}

}