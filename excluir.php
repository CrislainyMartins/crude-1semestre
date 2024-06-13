<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];


$sql =" DELETE FROM usuario WHERE id=$id";

if ($sql=mysqli_query($conexao, $sql)){
    echo"cadastro realizado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}
?>