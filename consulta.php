<center><h1>Consultar Clientes</h1>
<hr>
<form action="consulta.php" method="post">

Nome:<br>
<input type="text" name="nome" placeholder="ESCREVE SEU NOME"/>
<br><br>
<input type="submit" value="buscar"/>
</form>
<?php
echo"Resultado da busca:<br>";
$nome = $_POST["nome"];
$sql = "select * from cliente where nome like '".$nome."%'";
// like e % = usado para trazer partes do nome na busca.
$con = mysqli_connect("localhost","root","","aula5");
//$con = mysqli_connect(servidor,usuario,senha,banco);
$rs = mysqli_query($con,$sql);
if (mysqli_num_rows($rs) > 0) {
while($registro = mysqli_fetch_array($rs)){
    echo $registro["nome"]."--".$registro["email"]."--".$registro["idade"]."--".$registro["estadocivil"];}
}else{
echo"Nenhum cliente encontrado";
}

?>
