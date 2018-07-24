<?php 
 
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$idade = $_POST['idade'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];


$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('familia');
$query_select = "SELECT nome FROM usuarios WHERE nome = '$nome'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['nome'];
 
  if($nome == "" || $nome== null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastrar.html';</script>";
 
    }else{
      if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='cadastrar.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (nome,senha,idade,rua,bairro,cidade,conta) VALUES ('$nome','$senha','$idade','$rua','$bairro','$cidade','')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usu�rio cadastrado com sucesso!');window.location.href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='cadastrar.html'</script>";
        }
      }
    }
?>
