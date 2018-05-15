<html>

<body>


<?php
$qualIdade = 10;
$idade1 = 10;
$idade2 = 20;
$idade3 = 30;

$diaSemana = date("w");

switch($qualIdade){
  case 10:
  echo "Idade 10 Anos";
  break;
  case 20:
    echo "Idade 20 Anos";
    break;
}

for($i = 0; $i < 100; $i += 5)
{
  echo "<br /> Número: $i";
}
echo "<br />";

echo "<select>";

  for ($i=date("Y"); $i >= date("Y") - 100; $i--) {

    echo '<option value="'.$i.'">'.$i.'</option>';


  }
echo "</select>";


echo "<br />";

$lista = array("Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul");

foreach ($lista as $mes) {
  echo "O mês é: $mes <br />";
}

foreach ($lista as $index => $mes) {
  echo "O mês é: $mes <br />";
  echo "Indice: $index <br /><br />";
}






?>


<form>
<input type="text" name="nome" />
<input type="date" name="nascimento" />
<input type="submit" value="OK" />
</form>

<?php
if(isset($_GET))
{
  foreach ($_GET as $key => $value) {
    echo "Nome do campo: $key <br />";
    echo "Valor do campo: $value <br />";
    echo "<hr />";
  }
}
 ?>
</body>
</html>
