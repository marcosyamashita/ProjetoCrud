<?php
//Incluir comunicacao com banco de dados
include_once 'db/db_connect.php';
//Inclusão de cabecalho
include_once 'includes/header.php';
//Incluir Message
include_once 'includes/mensagem.php';
?>

<div class="container">
  <div class="row">
    <div class="col s12 m12 center">
        <div class="container">
      <h3 class="light">Menu Principal - Sistema Back-End PHP(Puro)</h3>

            </br></br></br>

          <a href="fornecedores.php" class="btn">Fornecedores</a>

            </br></br></br>

          <a href="produtos.php" class="btn green">Produtos</a>

          </div>

    </div>
  </div>

  <br><br><br>

<footer class="center">--Desenvolvido por Marcos Yamashita--</footer>
<div class="center">
    <a href="https://github.com/marcosyamashita" target="blank"><img src="https://img.icons8.com/ios-glyphs/30/000000/github.png"/></a>
    <a href="https://www.linkedin.com/in/marcos-yamashita-4617665a/" target="blank"><img src="https://img.icons8.com/color/30/000000/linkedin.png"/></a>

    <br><br><br>
</div>

</div>

<?php
include_once 'includes/footer.php';
?>