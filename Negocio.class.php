<?php

require_once 'crud.class.php';

class Negocio extends Crud
{
	protected $table = 'negocio';
	private $codigo;
	private $tipo;
    private $nome;
	private $quatidade;
	private $preco;
	private $negocio;

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getQuatidade()
    {
        return $this->quatidade;
    }

    /**
     * @param mixed $quatidade
     */
    public function setQuatidade($quatidade)
    {
        $this->quatidade = $quatidade;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preço
     */
    public function setPreco($preco)
    {
        $this->preço = $preco;
    }

    /**
     * @return mixed
     */
    public function getNegocio()
    {
        return $this->negocio;
    }

    /**
     * @param mixed $negocio
     */
    public function setNegocio($negocio)
    {
        $this->negocio = $negocio;
    }

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}


	public function insert()
	{
		$sql = "INSERT INTO $this->table (codigo, tipo, nome, quantidade, preco, negocio) VALUES (:codigo, :tipo, :nome, :quantidade, :preco, :negocio)";
		$stmt=Db::prepare($sql);
		$stmt->bindParam(':codigo',$this->codigo);
		$stmt->bindParam(':tipo',$this->tipo);
		$stmt->bindParam(':nome',$this->nome);
		$stmt->bindParam(':quantidade',$this->quantidade);
        $stmt->bindParam(':preco',$this->preco);
        $stmt->bindParam(':negocio',$this->negocio);
		$stmt->execute();
		return $this->nome;
	}

	public function dados_nome()
	{
		$dados = Crud::findall();
		return $dados;
	}

	public function mensagem($id)
	{
		$dados = Crud::find($id);
		return $dados;
	}

}

?>