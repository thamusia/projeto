<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/estilo.css">

	<script type="text/javascript" src="js/jquery-1.12.3.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"> </script>
	<script type="text/javascript" src="js/javascript.js"> </script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.js" ></script>

</head>
<body>
<nav class="navbar navbar-inverse menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebTest</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="verMensagem.php">checar dados</a></li>
        <li><a href="Negocio.php">Negociação de Mercadoria</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastrar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
<div class="row">
	<div class="col-sm-4 ">
		<div class="left">
			<img src="img/contato.jpg" alt="" class="img-responsive img">
		</div>
	</div>
	<div class="col-sm-8 right ">
	<fieldset>
		<legend>Negociação de Mercadoria</legend>
		<form id="form" role="form" class="well form" method="post">
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" required="true" name="codigo" id="codigo">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" required="true" name="tipo" id="tipo">
            </div>
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" required="true" name="nome" id="nome">
			</div>
			<div class="form-group">
				<label for="quatidade">Quatidade:</label>
				<input type="text" name="quatidade" class="form-control" required="true" id="quatidade">
			</div>
			<div class="form-group">
				<label for="preco">Preco:</label>
                <input type="number" name="preco" min="10" max="10000">
			</div>
            <div class="form-group">
                <label for="negocio">Tipo de Negócio:</label>
                <select>
                    <option value="compra">Compra</option>
                    <option value="venda">Venda</option>

                </select>
            </div>
			<div class="form-group">
				<input type="submit" name="Enviar" value="Enviar"  class="contatos btn btn-default " >
			</div>
		</form>
		</fieldset>
	</div>


</div>
</div>
</body>
</html>