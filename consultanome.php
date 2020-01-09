<center>
<hr>
<form action="consultanome.php" method="post">

<h1>Nome do Produto</h1><br>
<input type="text" name="nome" placeholder="Ex: Máquina de lavar"/>
<br><br>
<input type="submit" value="buscar"/>
</form>

<?php
echo"Resultado da busca:";
$nome = $_POST["nome"];
$sql = "select * from produto where nome like '".$nome."%'";
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
