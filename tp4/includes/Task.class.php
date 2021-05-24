<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function delProject($id)
	{
		$query = "DELETE FROM tb_to_do WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function bayarProject($id)
	{
		$query = "UPDATE tb_to_do SET status_td = 'Sudah Bayar' WHERE id='$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function addProject($tname, $tdetails, $tsubject, $tpriority, $tdeadline)
	{
		$query = "INSERT INTO tb_to_do(name_td, details_td, subject_td, priority_td, deadline_td, status_td) VALUES('$tname', '$tdetails', '$tsubject', '$tpriority', '$tdeadline', 'Belum Bayar')";

		return $this->execute($query);
	}
	

}



?>
