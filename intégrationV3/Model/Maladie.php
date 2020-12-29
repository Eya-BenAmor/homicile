<?php 
	/**
	 * 
	 */
	class Maladie
	{
		private $id;
		private $nom;
		private $description;

		function __construct($id,$nom,$description)
		{
			$this->id = $id;
			$this->nom = $nom;
			$this->description = $description;
		}

		function getId() {
			return $this->id;
		}

		function setId($id) {
			$this->id = $id;
		}

		function getNom() {
			return $this->nom;
		}

		function setNom($nom) {
			$this->nom = $nom;
		}

		function getDescription() {
			return $this->description;
		}

		function setDescription($description) {
			$this->description = $description;
		}
	}
?>