<!DOCTYPE html>
<html>
<head>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>
</head>
<body>
    <a href="cadastrar.html" >cadastrar cliente</a>  <a href="extrato.html" >extrato do cliente</a>  <a href="relatorio.html" >relatorio de todas as tranzaçoes realizadas no dia</a> <a href="saldo.php" >saldo da conta de todos os clientes</a><br>
<h1>EXTRATO DO CLIENTE</h1><br>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "familia";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM formulario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "nome: ".$rows_cursos['nome']."<br>";
        echo "deposito: ".$rows_cursos['deposito']."<br>";
        echo "data: ".$rows_cursos['data']."<br>";
        echo "saque: ".$rows_cursos['saque']."<br>";
        
    }
?>
</body>
</html>