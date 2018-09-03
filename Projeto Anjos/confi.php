<?php
        $bnome=$_POST['bnome'];
        include('conexao.php');
        $sql = "SELECT FROM tb_logins WHERE ('$bnome')";
        $executar = mysqli_query($conexao,$sql) or die (mysqli_error());
        echo $executar;
?>
