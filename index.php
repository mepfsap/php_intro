<?php
$categorias = [];
$categorias[0] = 'infantil';
$categorias[1] = 'adolescente';
$categorias[2] = 'adulto';
// print_r($categorias);
$nome = 'Gustavo';
$idade = 25;
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
            echo 'O nadador '.$nome.'compete na categoria adulto';
   }
}   
?>
