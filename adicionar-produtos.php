<?php

//Incluir comunicacao com banco de dados
include_once 'db/db_connect.php';
//Incluir cabeçalho
include_once 'includes/header.php';


//Selecionando os dados da tabela Fornecedor para preencher o select do formulario

$sql = "Select * from fornecedores";
$resultado = mysqli_query($connect, $sql);




?>

<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <h3 class="light">Cadastrar Produto</h3>
        <form action="db/create-produto.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome-produto" id="nome-produto" required>
                <label for="nome-produto">Nome Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="valor-produto" id="valor-produto" required>
                <label for="valor-produto">Valor Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="peso-produto" id="peso-produto" required>
                <label for="peso-produto">Peso Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="quantidadeEstoque-produto" id="quantidadeEstoque-produto" required>
                <label for="quantidadeEstoque-produto">Quantidade em Estoque</label>
            </div>
            <div class="input-field col s12">
                <h6 class="light">Selecione o Fornecedor</h6>
                <label for="nome-fornecedor"></label>

                    

                <select name="nome-fornecedor" id="nome-fornecedor">

                    <?php while($dados = mysqli_fetch_array($resultado)) { ?>
                        <option value="<?php echo $dados['id_fornecedor'] ?>"><?php echo $dados['nome_fornecedor']?></option>

                    <?php  } ?>

                </select>
            </div>

            <div class="col s12 center">
                <button type="submit" name="btn-create" class="btn">Cadastrar</button>
                <button type="reset" class="btn red">Apagar</button>
                <a href="produtos.php" class="btn green">Voltar</a>
            </div>

        </form>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>