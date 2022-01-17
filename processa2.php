<?php

include_once("conexao2.php");

$sqlValidaVagas = "select count(*) from matricula where escolas = ? and series = ?";


$nome =$_POST['nome'];
$cpf =$_POST['cpf'];
$nascimento =$_POST['ano']. "-" . $_POST ['mes'] . "-" . $_POST['dia'];
$pai=$_POST['pai'];
$mae=$_POST['mae'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$municipio=$_POST['municipio'];
$cep=$_POST['cep'];
$series=$_POST['series'];
$escolas=$_POST['escolas'];
$turno=$_POST['turno'];
$matricula=$_POST['matricula'];

//pega o número de vagas da escola e série selecionada
$qtdVagas = $_POST['qtdVagas'];



//valida o número de vagas
$sqlValidaVagas = "select count(*) as quantidade from matricula where escolas = '$escolas' and series = '$series'";


//valida o cpf de vagas
$sqlValidaCPF = "select count(*) as quantidade from matricula where cpf = '$cpf'";


if ($resultCPF = $mysqli-> query($sqlValidaCPF)) {
    if ($resultCPF["quantidade"] > 0){
        echo "CPF do aluno já cadstrado no sistema!";
       return;
    }
}     

if ($result = $mysqli -> query($sqlValidaVagas)) {
    if ($qtdVagas >= $result["quantidade"]) {
        $sql = "INSERT INTO matricula (nome,cpf,nascimento,pai,mae,telefone,email,rua,numero,bairro,estado,cidade,municipio,cep,series,escolas,turno,matricula) values ('$nome','$cpf','$nascimento','$pai', '$mae', '$telefone', '$email' , '$rua', '$numero', '$bairro', '$estado', '$cidade', '$municipio', '$cep', '$series', '$escolas', '$turno', '$matricula') ";
        $salvar = mysqli_query($conexao2, $sql);
    } else {
        echo "Faltou vaga";
    }
  }

mysqli_close($conexao2)

?>