<?php
        $nome=$_POST['tnome'];
        $email=$_POST['temail'];
        $senha=$_POST['tsenha'];
        include('conexao.php');
        $sql = "INSERT INTO tb_logins(log_login, log_senha, log_email) VALUES ('$nome','$senha','$email')";
        $executar = mysqli_query($conexao,$sql) or die (mysqli_error());
?>
<script type="text/javascript">
    alert("Salvo com sucesso!");
    location.href="index.php";

</script>