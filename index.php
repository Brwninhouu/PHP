<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <center> <title>Cadastro</title>
   <style type="text/css">
    #tela{ border: 1px solid #000;
    padding: 20px; /* margem interna do elemento*/
    width: 300px;
    background: #EEE;
    
    
    
    }
    
    
    
    
    
    </style>

</head>
<body>
    <h1>CADASTRAR PRODUTOS</h1>
<center> <div id="tela"><!-- abre a divisão!-->

<!-- action: para onde os dados serão enviados 
 method: forma na qual os dados serão enviados
get: utiliza a url para enviar os dados(link)
post: utiliza o próprio envio(server) para os dados (esconde os dados)-->
 <center><form action="gravar.php" method="post" onsubmit="return validarFormulario()">
 Código do produto:
<br>
<input type="text" name = "codigo" id="codigo"/>
<br><br>
 Nome do produto:
<br>
<input type="text" name = "nome" id="nome"/>
<br><br>
Descrição do produto:
<br>
<input type="text" name = "descricao" id="descricao"/>
<br><br>
Produto Perecível?<br>
<input type="radio" name="perecivel" id="perecivel" value="Sim">Sim
<input type="radio" name="perecivel" id="perecivel" value="Não">Não<br>
<br><br>
Valor do produto:
<br>
<input type="text" name = "valor" id="valor"/>
<br><br>
Quantidade no estoque:
<br>
<input type="text" name = "quantidade" id ="quantidade"/>
<br><br><br>

<input type="submit" value="Cadastrar produto">
<input type="reset" value="Limpar Campos">
<br><br><br>
<h1><a href= "consultanome.php">Consultar por nome</a></h1>
<h1><a href= "consultacodigo.php">Consultar por código</a></h1>

 </form>
</div><!-- Fecha a divisão!-->
<script type="text/javascript">
function validarFormulario(){
 var valido = true;
 var mensagem = '';
 // pegar o valor nome do produto do formulário
 var codigo = document.getElementById("codigo");
 var nome = document.getElementById("nome");
 var descricao = document.getElementById("descricao");
 var perecivel = document.getElementById("perecivel");
 var valor = document.getElementById("valor");
 var quantidade = document.getElementById("quantidade");
 if(codigo.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }

 if(nome.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }

 if(descricao.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }

 if(perecivel.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }
 
 if(valor.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }

 if(quantidade.value == ""){
     valido = false;
 mensagem = "Por favor, preencha todos os campos.";
 }

 if(valido == false){
alert(mensagem);

 }
return valido;

}

</script>

</body>
</html>