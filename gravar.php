<?php 
/*Gravar os dados no banco 
-resgatar os dados do formulário
*/
//1-Resgatar os dados do formulário.
$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$perecivel = $_POST["perecivel"];
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"];
//2-Montar o SQL para gravar os dados no banco.
$sql="insert into produto values(null,'".$codigo."','".$nome."','".$descricao."','".$perecivel."','".$valor."','".$quantidade."')";
//3-Abrir conexão com o banco de dados
//$con = mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","aula5desafio");
//4-Gravar os dados no banco.
if(mysqli_query($con,$sql)){
echo"Produto cadastrado com sucesso!";
}else{
    echo"Erro ao cadastrar";
}
mysqli_close($con);




?>