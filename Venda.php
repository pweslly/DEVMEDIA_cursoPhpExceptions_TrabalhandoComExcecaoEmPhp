<?php

namespace Venda;
use Produto\Produto;
use VendaException\VendaException;

class Venda extends Produto{

  private $itens = [];

  
  public function adicionar($Produto){
    if($Produto == null){
      throw new VendaException(2500,"Item não pode ser nulo");
      
    }
      array_push($this->itens, $Produto);
   
  }

    public function exibirProduto(){
    $ArrayProduto = $this->itens;    
    $QtdValordArrayProduto = count($ArrayProduto);
    $j = $QtdValordArrayProduto;   
    $nomeProduto = "";     
      for($i = 1; $i < $j; $i++){                     
        foreach($this->itens as  $itemtwo){          
        $nomeProduto  .= $itemtwo->getDescricao()."<br>";      
        }          
    } 
    return  $nomeProduto;      
  }


  public function exibirPreco(){
    $ArrayProduto = $this->itens;    
    $QtdValordArrayProduto = count($ArrayProduto);
    $j = $QtdValordArrayProduto;   
    $informacaodoPreco = "";     
      for($i = 1; $i < $j; $i++){                     
        foreach($this->itens as  $itemtwo){          
        $informacaodoPreco  .= $itemtwo->getPreco()."<br>";      
        }          
    } 
    return  $informacaodoPreco;      
  }

  public function getTotal(){
    $total = 0;
    
    foreach($this->itens as $item){
      $total += $item->getPreco();      
    }
    return $total;  
  }
}