
?>
<?php
$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$datta=$_POST['datta'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$rua=$_POST['rua'];;
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$sql=mysqli_query($conexao,"INSERT INTO aluno(nome,sexo,datta,cidade,bairro,rua,numero,complemento) VALUES ('$nome','$sexo',$datta,'$cidade','$bairro','$rua','$numero','$complemento')");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";


