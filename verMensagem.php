<!DOCTYPE html>
<html lang="pt-Br">
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
        <li class="active"><a href="#=index.php">Home</a></li>
        <li><a href="checar_dados.php">checar dados</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="navbar-brand"><span><?php echo $_SESSION['usuario'] ?></span></li>
        <li><a href="logout.php" id="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
	<div class="col-sm-4 ">
		<img src="img/busca.jpg" alt="buscar">
	</div>
  <div class="col-sm-6">
    
    <fieldset>
      <legend id="dados">Mensagens</legend>
      <table class="lista_dados well">
       <tr > <th>nome</th>
        <th >email</th>
       <th >telefone</th>
        </tr>
        <tr>
        <td class="tabela">
          <?php
           $id = $_GET['id'];
            $negocio = new Negocio();
            $dados=$negocio->mensagem($id);
            echo $dados['nome'];
            echo "...............";
             
           ?>
        </td>
        <td>
        <?php
          echo $dados['codigo'];
          echo "................";
        ?>
        </td>
        <td>
          <?php
          echo $dados['tipo'];
        ?>
        </td>
         <td>
           <?php
            echo $dados['quantidade'];
            ?>
         </td>
         <td>
            <?php
             echo $dados['preco'];
             ?>
         </td>
         <td>
             <?php
             echo $dados['negocio'];
             ?>
          </td>
              
        </tr>
        </table>

    </fieldset>
  </div>

</div>
</div>
</body>
</html>
