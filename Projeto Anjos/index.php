<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projetos</title>
	<!--Link Css-->
	<link rel="stylesheet" type="text/css" href="css/style0,2.css">
	<link rel="icon" href="icon/warface.png" type="image/x-icon"/>
		<!--Font-->
	<link href = "https://fonts.googleapis.com/css?family= Pinyon + Script " rel = "stylesheet">
	<link rel="stylesheet"  href="font/PinyonScript-Regular">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--Link JavaScript--><!--Link booststrap-->
	<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
	<script type="text/javascript" src="bootstrap/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!--W3School-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-8">
        <form action="conf.php" method="POST" class="formulario">
							<fieldset>
				 				<legend>Cadastre-se</legend>
							 	<label for="cnome"><b>Nome</b></label>
							 	<input type="text" name="tnome" id="cnome" maxlength="8" required="" placeholder="Nome">
							 	<label for="cemail"><b>Email</b></label>
    							<input type="text" placeholder="Enter Email" name="temail"  required="" id="cemail">
							 	<label for="csenha">Senha</label>
							 	<input type="password" name="tsenha" id="csenha" required="" placeholder="Digite sua senha">
							 	<label for="csenharep" ><b>Repita a senha</b></label>
							    <input type="password" placeholder="Repita a senha" name="tsenharep"  required="" id="csenharep">
							    <input type="checkbox" checked="checked" required=""> Remember me
							    <p>Ao criar uma conta, você concorda com nossos <a href="#">Termos e Privacidade</a>.</p>
							    <div class="clearfix">
							      <button type="button"  class="cancelbtn"  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" class="signupbtn">Inscrever-se</button>
                                  
							    </div>
							</fieldset>
                    </form>
                </div>
            </div>
        </div>
   



</body>
</html>