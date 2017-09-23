<?php
require_once("Negocio.class.php");

 $nome = $_POST['nome'];
 $tipo = $_POST['tipo'];
 $codigo = $_POST['codigo'];
 $quatidade = $_POST['quantidade'];
 $preco = $_POST['preco'];
 $negocio = $_POST['neocio'];

 echo $negocio;
 echo $nome;
 die;

 $mercadoria = new Negocio();
 $mercadoria->setNome($nome);
 $mercadoria->setTipo($tipo);
 $mercadoria->setCodigo($codigo);
 $mercadoria->setQuantidade($quatidade);
 $mercadoria->setpreco($preco);
 $mercadoria->setNegocio($negocio);
 $mercadoria->insert();

?>