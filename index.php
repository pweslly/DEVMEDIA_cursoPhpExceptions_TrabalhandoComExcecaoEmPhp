<?php 
  use ItemVenda\ItemVenda;
  use Venda\Venda;

  require_once "Venda.php";
  require_once "ItemVenda.php";
  
  $camisa = new ItemVenda();
  $camisa->setDescricao("Camisa Polo");
  $camisa->setPreco(12.0);

  $bone = new ItemVenda();
  $bone->setDescricao("Boné Infantil");
  $bone->setPreco(21.0);

  $Venda = new Venda();
  $Venda->adicionar(null);
  $Venda->adicionar($bone);

  print "Total da venda: ". $Venda->getTotal();