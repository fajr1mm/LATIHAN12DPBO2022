<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}
	function addPasien($data)
	{
		
		// Query mysql select data pasien
		$query = "INSERT INTO db_pasien VALUES (null, '" . $data->getNik() . "', '" . $data->getNama() . "', '" . $data->getTempat() . "', '" . $data->getTl() . "', '" . $data->getGender() . "', '" . $data->getEmail() . "', '" . $data->getTelp() . "')";
		return $this->execute($query);
		// Mengeksekusi query
		return $this->execute($query);
	}
	function updatePasien($data)
	{

		// Query mysql select data pasien
		$query = "UPDATE db_pasien SET nik='" . $data->getNik() . "', nama='" . $data->getNama() . "', tempat='" . $data->getTempat() . "', tl='" . $data->getTl() . "', gender='" . $data->getGender() . "', email='" . $data->getEmail() . "', telp='" . $data->getTelp() . "' WHERE id='" . $data->getId() . "'";
		// Mengeksekusi query
		return $this->execute($query);
	}
	function deletePasien($id)
	{

		// Query mysql select data pasien
		$query = "DELETE FROM db_pasien WHERE id='$id'";
		// Mengeksekusi query
		return $this->execute($query);
	}
}
