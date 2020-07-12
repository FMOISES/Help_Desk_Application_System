<?php
session_start();
//montagem do texto
$texto = $_SESSION['id'].'#'.$_POST['titulo'].' # '.$_POST['categoria'].' # '.$_POST['descricao']. PHP_EOL;
//abrindo novo arquivo
$arquivo = fopen('arquivo.txt','a');
//escrevendo no arquivo
fwrite($arquivo,$texto);
//fechando o arquivo;
fclose($arquivo);
if(true == true){
?>
<script>alert("Registro feito com sucesso !")
    window.location.href = "abrir_chamado.php";
 </script>
<?php
}
?>