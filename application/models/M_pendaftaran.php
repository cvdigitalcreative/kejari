<?php
/**
 * 
 */
class M_pendaftaran extends CI_Model
{
		
		function getAllPendaftaran(){
			return $this->db->query("SELECT a.*,b.* FROM tbl_pendaftaran a, tbl_training b WHERE a.training_id = b.training_id ORDER BY a.pendaftaran_id DESC");
		}

		function save_pendaftaran($nama,$telp,$email,$perusahaan,$training_id,$comment){
			return $this->db->query("INSERT INTO tbl_pendaftaran(pendaftaran_nama,pendaftaran_telpon,pendaftaran_email,pendaftaran_instansi,training_id,pendaftaran_comment) VALUES ('$nama', '$telp', '$email', '$perusahaan','$training_id', '$comment')");
		}

		function update_pendaftaran($pendaftaran_id,$nama,$telp,$email,$perusahaan,$training_id,$comment){
			return $this->db->query("UPDATE tbl_pendaftaran SET pendaftaran_nama='$nama', pendaftaran_telpon='$telp',pendaftaran_email = '$email',pendaftaran_instansi='$perusahaan',training_id='$training_id',pendaftaran_comment='$comment' WHERE pendaftaran_id='$pendaftaran_id'");
     		
		}

		function hapus_pendaftaran($pendaftaran_id){
	      	return $this->db->query("DELETE FROM tbl_pendaftaran WHERE pendaftaran_id='$pendaftaran_id'");
	      	
    	}
}
?>