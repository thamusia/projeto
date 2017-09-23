<?php
abstract class banco
{
	public $servidor = "localhost";
	public $usuario = "root";
	public $senha = "";
	public $nomebanco = "sisteminha";
	public $conexao = NULL;
	public $dataset = NULL;
	public $linhasafetadas = -1;

	public function __construct(){

		$this->conecta();
	}

	public function __destruct(){

		if($this->conexao!=NULL):
			mysql_close($this->conexao);
		endif;
	}

	public function conecta(){

		$this->conexao = mysql_connect( $this->servidor, $this->usuario, $this->senha, TRUE) or die( $this->trataerro(__FILE__,__FUNCTION__,mysql_errno(),mysql_error(), TRUE));

		mysql_select_db($this->nomebanco) or die($this->trataerro(__FILE__,__FUNCTION__,mysql_errno(),mysql_error(), TRUE));

		mysql_query("SET 'utf8'");
		mysql_query("SET character_set_connection=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_results=utf8");

	}//conecta

	public function inserir($objeto)
	{
		$sql="INSERT INTO ".$objeto->tabela." (";
		for ($i=0; $i <count($objeto->campo_valores) ; $i++) { 
			$sql.=key($objeto->campo_valores);
			if ($i<(count($objeto->campo_valores)-1)) {
				
				$sql.=",";
			}else{$sql.=")";}
			next($objeto->campo_valores);
		}
		reset($objeto->campo_valores);
		$sql.="VALUES (";
		for ($i=0; $i < count($objeto->campo_valores); $i++) { 
			$sql.=is_numeric($objeto->campo_valores[key($objeto->campo_valores)]) ? $objeto->campo_valores[key($objeto->campo_valores)] : "'".$objeto->campo_valores[key($objeto->campo_valores)]."'";
			if($i<(count($objeto->campo_valores)-1))
			{
				$sql.=",";
			}else{$sql.=")";}
			next($objeto->campo_valores);
		}
		echo $objeto->tabela."aaaa";
		echo $sql;
		return $this->executeSQL($sql);
	}//inserir

	public function executeSQL($sql=NULL)
	{
		if ($sql!=NULL) {
			$query=mysql_query($sql) or $this->trataerro(__FILE__,__FUNCTION__);
			$this->linhasafetadas=mysql_affected_rows($this->conexao);
		}else{$this->trataerro(__FILE__,__FUNCTION__,NULL,'comando sql não informado na rotina',FALSE);}
	}//executeSQL

	public function trataerro($arquivo=NULL, $rotina=NULL,$numerro=NULL,$msgerro=NULL,$geraexcept=FALSE){

		if ($arquivo==NULL)
		{
			$arquivo = "não informado";

		}

		if ($rotina==NULL)
		{
			$rotina = "não informado";

		}

		if ($numerro==NULL)
		{
			$numerro = mysql_errno($this->conexao);

		}

		if ($msgerro==NULL)
		{
			$msgerro = mysql_error($this->conexao);

		}

		$resultado = 'Ocorreu um erro com os seguintes detalhes:<br/>
			<strong>Arquivo:</strong>'.$arquivo.'<br/>
			<strong>Rotina:</strong>'.$rotina.'<br/>
			<strong>codigo:</strong>'.$numerro.'<br/>
			<strong>Mensagem:</strong>'.$msgerro;

			if($geraexcept==FALSE):
				echo ($resultado);
			else:
				die($resultado);
			endif;
	}

}
?>