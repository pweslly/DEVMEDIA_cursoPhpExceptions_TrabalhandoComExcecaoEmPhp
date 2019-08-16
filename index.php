<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <title>DEVMEDIA - PHP Excpetions - Trabalhando com Exceção em PHP</title> 

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<?php 

  use Produto\Produto;
  use Venda\Venda;
  use VendaException\VendaException;

require_once("VendaException.php");
require_once("Produto.php");
require_once("Venda.php");
  
  
  try{

   // Adicionando produto Camisa
  $Camisa = new Produto();  
  $Camisa->setPreco("12");
  $Camisa->setDescricao("Camisa Polo");

  // Adicionando produto Bone
  $Bone = new Produto();
  $Bone->setPreco("5");
  $Bone->setDescricao("Bone X-men");

    
  $Venda = new Venda();
  $Venda->adicionar($Camisa);
  $Venda->adicionar($Bone); // Voce coloca NULL para ver o resultado e  depois exclui camisa e bone
  ?>

  <div class="container">  
    <div classs="row">
      <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Meu Carrinho</span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condesed">
              <div>
              <!-- EXIBINDO MEU PRODUTOS INSERIDO -->
              <h6 class="my-0"><?php echo $Venda->exibirProduto(); ?></h6>
                <small class="text-muted"></small>
            </div>
    <!-- EXIBINDO PREÇO TOTAL DOS MEUS PRODUTOS--> 
  <span class="text-muted"><?php echo "Total: ". $Venda->getTotal(); ?></span>
       
            </li>


            <li class="list-group-item d-flex justify-content-between lh-condesed">
              <div>
                <h6 class="my-0">Preço Unitário</h6>
                <small class="text-muted">Preço Unitário</small>
              </div>
               <!-- QUERIA EXIBIR PRODUTO POR PREÇO -->
              <span class="text-muted"><?php echo $Venda->exibirPreco(); ?></span>
            </li>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Assinar</button>
        </ul>
  </div>

  <?php
    } catch (VendaException $e){
      echo "VendaException: ". $e->getMessage() . " - Código: " . $e->getCodigo();
    }
?>  

  </div>
  
    </body>
    </html>