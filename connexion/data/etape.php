<?php 


/**
 * 
 */
class Etape
{	
	private $_id =0;
	private $date='';
	private $_contenu = '***';
	private $_ordre = 0 ;
	
	
	function __construct($int1,$string1,$string2,$int2)
	{
		$this->_id = $int1;
		$this->_date = $string1;
		$this->_contenu = $string2;
		$this->_ordre = $int2;	
	}

	function getId(){return $this->_id;}
	function getDate(){return $this->_date;}
	function getContenu(){return $this->_contenu;}
	function getOrdre(){return $this->_ordre;}


	function setId($int){$this->_Id=$int;}
	function setDate($string){$this->_date=$string;}
	function setContenu($string){$this->_contenu=$string;}
	function setOrdre($string){$this->_ordre=$int;}

}



 ?>