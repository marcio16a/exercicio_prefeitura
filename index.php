<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastro do aluno</h1>
    <form method="post" action="processa.php">
    <label>Nome:</label>
    <input type="text"name="nome"placeholder="Digite o nome completo"><br><br>
    <label>Sexo:</label>
    <input type="text"name="sexo"placeholder="Digite o sexo"><br><br>
    <label>Data de Nascimento:</label>
    <input type="date"name="datta"placeholder="Digite a data de nascimento"><br><br>
    <label>Cidade:</label>
    <input type="text"name="cidade"placeholder="Digite a cidade"><br><br>
    <label>Bairro:</label>
    <input type="text"name="bairro"placeholder="Digite o bairro"><br><br>
    <label>Endereço:</label>
    <input type="text"name="rua"placeholder="Digite o nome da rua">
    <label>Numero:</label>
    <input type="number"name="numero"placeholder="Digite o numero da rua"><br><br>
    <label>Complemento:</label>
    <input type="text"name="complemento"placeholder="Digite o complemento"><br><br>

    <input type="submit" value="cadastrar">

<br>
<br>
<h1>Cadastro da turma</h1>
    <form method="post" action="processa.php">
    <label>Descrição:</label>
    <input type="text"name="description"placeholder="Descrição da turma"><br><br>
    <label>Quantidade de vagas:</label>
    <input type="text"name="vagas"placeholder="Digite a quantidade de vagas"><br><br>
    <label>Professor:</label>
    <input type="text"name="professor"placeholder="Digite o nome do professor"><br><br>
    <input type="submit" value="cadastrar">
    
    
    
    </form>
    
</body>
</html>
