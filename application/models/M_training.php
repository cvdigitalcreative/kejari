<?php
	/**
	 * 
	 */
	class M_training extends CI_Model
	{
		function getAllTraining(){
			$hasil=$this->db->query("SELECT * FROM tbl_training");
        	return $hasil;
		}

		function save_Training($nama){
			$hsl = $this->db->query("INSERT INTO tbl_training(training_nama) VALUES ('$nama')");
        	return $hsl;
		}

		function update_Training($id,$nama){
			$hsl = $this->db->query("UPDATE tbl_training SET training_nama='$nama' WHERE training_id='$id'");
        	return $hsl;
		}

		function hapus_Training($id){
	      	$hsl = $this->db->query("DELETE FROM tbl_training WHERE training_id='$id'");
	      	return $hsl;
    	}
	}
?>