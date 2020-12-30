<?php 
	/**
	 * 
	 */
	class DossierMed
	{
		private $id;
		private $maladie_id;
		private $patient_id;
		private $titre;
		private $ficher_pdf;
		private $description;

		function __construct($id,$maladie_id,$patient_id,$titre,$ficher_pdf,$description)
		{
			$this->id = $id;
			$this->maladie_id = $maladie_id;
			$this->patient_id = $patient_id;
			$this->titre = $titre;
			$this->ficher_pdf = $ficher_pdf;
			$this->description = $description;
		}

		function getId() {
			return $this->id;
		}

		function setId($id) {
			$this->id = $id;
		}

		function getMaladie_id() {
			return $this->maladie_id;
		}

		function setMaladie_id($maladie_id) {
			$this->maladie_id = $maladie_id;
		}

		function getPatient_id() {
			return $this->patient_id;
		}

		function setPatient_id($patient_id) {
			$this->patient_id = $patient_id;
		}

		function getTitre() {
			return $this->titre;
		}

		function setTitre($titre) {
			$this->titre = $titre;
		}

		function getFicher_PDF() {
			return $this->ficher_pdf;
		}

		function setFicher_PDF($ficher_pdf) {
			$this->ficher_pdf = $ficher_pdf;
		}

		function getDescription() {
			return $this->description;
		}

		function setDescription($description) {
			$this->description = $description;
		}
	}
?>