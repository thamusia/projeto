<?php
require_once("banco.class.php");
abstract class base extends banco
{

	public $tabela="";
	public $campo_valores=array();
	public $campopk=NULL;
	public $valorPK=NULL;
	public $extras_select="";

	//métodos
	public function addCampo($campo=NULL, $valor=NULL)
	{
		if($campo!=NULL):
			$this->campo_valores[$campo]=$valor;
		endif;
	}

	public function delcampo($campo=NULL)
	{
		if(array_key_exists($campo, $this->campo_valores)):
			unset($this->campo_valores[$campo]);
		endif;
	}

	public function setvalor($campo=NULL, $valor=NULL)
	{
		if ($campo!=NULL && $valor!=NULL):

			$this->campo_valores[$campo]=$valor;
		endif;		
	}

	public function getvalor($campo=NULL)
	{
		if ($campo!=NULL && array_key_exists($campo, $this->campo_valores)) :

			return $this->campo_valores[$campo];
		else:
			return FALSE;

		endif;
	}


}

?>