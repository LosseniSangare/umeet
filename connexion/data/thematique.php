<?php 


/**
 * 
 */
class Thematique
{	
	private $_id =0;
	private $_titre='';
	private $_contenu = '***';
	private $_ordre = 0 ;
	
	
	function __construct($int1,$string1,$string2,$int2)
	{
		$this->_id = $int1;
		$this->_titre = $string1;
		$this->_contenu = $string2;
		$this->_ordre = $int2;	
	}

	function getId(){return $this->_id;}
	function getTitre(){return $this->_titre;}
	function getContenu(){return $this->_contenu;}
	function getOrdre(){return $this->_ordre;}


	function setId($int){$this->_id=$int;}
	function set($string){$this->_titre=$string;}
	function setContenu($string){$this->_contenu=$string;}
	function setOrdre($int){$this->_ordre=$int;}

}



 ?>