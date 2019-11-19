<?php 


/**
 * 
 */
class User
{	
	private $_id = 0;
	private $_nom =""; 
	private $_prenoms ="";
	private $_email ="";
	private $_tel ="";
	private $_password ="";
	private $_habilitation ="";
	
	function __construct($id2,$nom2,$prenoms2,$email2,$tel2,$password2,$habilitation2)
	{
		$this->_id = $id2;
		$this->_nom = $nom2;
		$this->_prenoms = $prenoms2;
		$this->_email=$email2;
		$this->_tel=$tel2;
		$this->_password=$password2;
		$this->_habilitation = $habilitation2;
		
	}

	function getId(){return $this->_Id;}
	function getNom(){return $this->_nom;}
	function getPrenoms(){return $this->_prenoms;}
	function getEmail(){return $this->_email;}
	function getTel(){return $this->_tel;}
	function getPassword(){return $this->_nom;}
	function getHabilitation(){return $this->_nom; }

	function setId($int){$this->_Id=$int;}
	function setNom($string){$this->_nom=$string;}
	function setPrenoms($string){$this->_prenoms=$string;}
	function setEmail($string){$this->_email=$string;}
	function setTel($string){$this->_tel=$string;}
	function setPassword($string){$this->_nom=$string;}
	function setHabilitation($string){$this->_nom=$string; }


}

















 ?>