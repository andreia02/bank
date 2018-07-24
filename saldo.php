
 
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<title>Soma Dinâmica com PHP e MySQL</title>
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
	<?php
	
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "familia";
       
	@$busca = mysql_connect("$local","$usuario","$senha") or die("ERRO AO CONECTAR AO MYSQL, VERIFIQUE COM O ADMINISTRADOR" . mysql_error());
	mysql_select_db("$banco") or die("BASE DE DADOS INVÁLIDO");
	$pesquisa = mysql_query("SELECT sum(deposito),sum(saque) FROM formulario");
       
       
	while($sum = mysql_fetch_array($pesquisa)){
	$deposito = $sum['sum(deposito)'];
        $saque= $sum['sum(saque)'];
        $total=$deposito-$saque;
        
        
        echo "$$total";
       
	}
	
	?>
	
	</body>
</html