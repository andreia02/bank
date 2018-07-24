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
     <a href="cadastrar.html" >cadastrar cliente</a>  <a href="" >extrato do cliente</a>  <a href="relatorio.html" >relatorio de todas as tranzaçoes realizadas no dia</a> <a href="" >saldo da conta de todos os clientes</a><br>
     <h1>RELATORIO DE TODAS AS TRANZAÇOES REALIZADA NO DIA</h1>
   <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "familia";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_banco = "SELECT * FROM formulario WHERE data LIKE '%$pesquisar%' LIMIT 5";
    $resultado_banco = mysqli_query($conn, $result_banco);
    
    while($rows_banco = mysqli_fetch_array($resultado_banco)){
        echo "nome: ".$rows_banco['nome']."<br>";
        echo "deposito: ".$rows_banco['deposito']."<br>";
        echo "data: ".$rows_banco['data']."<br>";
        echo "saque: ".$rows_banco['saque']."<br>";
        
    }
?>
    </body>
</html>
