<?php 


/**
 * 
 */
class Logement
{	
	private $_id =0;
	private $_logement = "";
	private $_distance ="";
	private $_simple ="";
	private $_double ="";
	private $_quote ="";
	private $_site ="";
	
	function __construct($int,$string1,$string2,$string3,$string4,$string5,$string6)
	{
		$this->_id = $int;
		$this->_logement = $string1;
		$this->_distance = $string2;
		$this->_simple=$string3;
		$this->_double=$string4;
		$this->_quote =$string5;
		$this->_site =$string6;
		
	}

	function getId(){return $this->_id;}
	function getLogement(){return $this->_logement;}
	function getDistance(){return $this->_distance;}
	function getSimple(){return $this->_simple;}
	function getDouble(){return $this->_double;}
	function getQuote(){return $this->_quote;}
	function getSite(){return $this->_site;}

	function setId($int){$this->_id=$int;}
	function setLogement($string){$this->_logement=$string;}
	function setDistance($string){$this->_distance=$string;}
	function setSimple($string){$this->_simple=$string;}
	function setDouble($string){$this->_double=$string;}
	function setQuote($int){$this->_quote=$int;}
	function setSite($string){$this->_site=$string;}


}



 ?>