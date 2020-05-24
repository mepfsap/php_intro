<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
// print_r($categorias);
$nome = $_POST["nome"];
$idade = $_POST["idade"];
//var_dump($nome);
//var_dump($idade);
if (empty($nome))
{
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor, preencha novamente.';
   header('Location: index.php');
   return;
}
else if (strlen($nome) < 3)
{
   $_SESSION['mensagem-de-erro'] = 'Esse nome é muito pequeno, por favor, preencha novamente.';
   header('Location: index.php');
   return;
}
else if (strlen($nome) > 30)
{
   $_SESSION['mensagem-de-erro'] = 'Esse nome é muito grande, por favor, preencha novamente.';
   header('Location: index.php');
   return;
}
else if (!is_numeric($idade))
{
   $_SESSION['mensagem-de-erro'] = 'Digite um número para sua idade, por favor.';
   header('Location: index.php');
   return;
}
if($idade >= 6 && $idade <=12)
{
   for ($i=0; $i < count($categorias) ; $i++)
   {
      if($categorias[$i] == 'infantil')
      {
         $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria infantil';
         header('Location: index.php');
         return;
      }
   }
}   
else if($idade >= 13 && $idade <= 18)
{
   for ($i=0; $i < count($categorias) ; $i++)
   { 
      if($categorias[$i] == 'adolescente')
      {
         $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria adolescente';
         header('Location: index.php');
         return;
      }   
   }
}   
else
{
   for ($i=0; $i < count($categorias) ; $i++)
   { 
      if($categorias[$i] == 'adulto')
      {
         $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria adulto';
        header('Location: index.php');
      }   return;
   }
}      
?>