<center>
<hr>
<form action="consultacodigo.php" method="post">

<h1>Código do Produto</h1><br>
<input type="text" name="codigo" placeholder="Ex: 12345"/>
<br><br>
<input type="submit" value="buscar"/>
</form>

<?php
echo"Resultado da busca:";
$codigo = $_POST["codigo"];
$sql = "select * from produto where codigo like '".$codigo."%'";
// like e % = usado para trazer partes do nome na busca.
$con = mysqli_connect("localhost","root","","aula5desafio");
//$con = mysqli_connect(servidor,usuario,senha,banco);
$rs = mysqli_query($con,$sql);
if (mysqli_num_rows($rs) > 0) {
while($registro = mysqli_fetch_array($rs)){
    echo "<br><br><h4>Código do produto: ".$registro["codigo"]."</h4><br><br>Nome do produto: ".$registro["nome"]."<br><br>Descrição do produto: ".$registro["descricao"]."<br><br>Produto perecível? ".$registro["perecivel"]."<br><br>Valor do produto: R$ ".$registro["valor"]."<br><br>Quantidade em estoque: ".$registro["quantidade"];}
}else{
echo"Nenhum produto encontrado";
}

?>
