<?php
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
    echo "O nome não pode ser vazio";
    return;
}
if (strlen($nome) < 3)
{
    echo "Esse nome é muito pequeno";
    return;
}
if (strlen($nome) > 30)
{
    echo "Esse nome é muito grande";
    return;
}
if (!is_numeric($idade))
{
    echo 'Digite um número para sua idade';
    return;
}
if($idade >= 6 && $idade <=12)
{
   for ($i=0; $i < count($categorias) ; $i++)
   {
      if($categorias[$i] == 'infantil')
         echo 'O nadador '.$nome.' compete na categoria infantil';
   }
}
else if($idade >= 13 && $idade <= 18)
{
   for ($i=0; $i < count($categorias) ; $i++)
   { 
      if($categorias[$i] == 'adolescente')
         echo 'O nadador '.$nome.' compete na categoria adolescente';
   }
}   
else
{
   for ($i=0; $i < count($categorias) ; $i++)
   { 
      if($categorias[$i] == 'adulto')
            echo 'O nadador '.$nome.' compete na categoria adulto';
   }
}   
?>
