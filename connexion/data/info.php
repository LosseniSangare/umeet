<?php 


/**
 * 
 */
class Info
{	
	private $_id =0;
	private $_titre='';
	private $_contenu = '***';
	private $_dates = 0 ;
	
	
	function __construct($int1,$string1,$string2,$string3)
	{
		$this->_id = $int1;
		$this->_titre = $string1;
		$this->_contenu = $string2;
		$this->_dates = $string3;	
	}

	function getId(){return $this->_id;}
	function getTitre(){return $this->_titre;}
	function getContenu(){return $this->_contenu;}
	function getDates(){return $this->_dates;}


	function setId($int){$this->_id=$int;}
	function set($string){$this->_titre=$string;}
	function setContenu($string){$this->_contenu=$string;}
	function setDates($string){$this->_dates=$string;}

}



 ?>