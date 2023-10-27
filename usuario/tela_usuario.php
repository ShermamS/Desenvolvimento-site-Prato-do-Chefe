<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		echo "<script> window.location.href='http://localhost/receita_site';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 1) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome_completo_login']);
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['tipo_login']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);
		unset ($_SESSION['url_usuario']);

		echo "<script> window.location.href='http://localhost/receita_site';</script>";				

	} 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/tela_usuario.css";?>">

</head>

<body class="bg">

    <ul>
      <a href="home.html" class="logo">Prato do Chefe</a>   <!-- verificar home -->
      <div>
        <a><?php echo "Seja bem-vindo, ". $_SESSION['nome_completo_login'];?></a>
        <a class="conta" href="<?php echo $_SESSION['url']."/sair.php";?>">Sair</a>   
      </div>
    </ul>

    <div class="container">
        <section class="todos-produtos">

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>

          <div class="produto">
            <img src="../img/bolo-chocolate.jpg" alt="receita">
            <div class="misc-produto">
              <h3>Bolo de chocolate</h3>
              <label>Fofinho, prático, rápido e delicioso: essa é realmente a melhor receita de bolo de chocolate do mundo! Veja como fazer esse bolo incrível na sua própria casa!</label> 
            </div>  
          </div>
          

          
        </section>
    </div>


    <div class="canto-esquerdo">
        <span>background de <a href="https://www.freepik.com/free-vector/sketchy-food-background_772953.htm#query=food%20backgrounds&position=10&from_view=search&track=ais">Freepik</a></span>
    </div>
    
</body>
</html>