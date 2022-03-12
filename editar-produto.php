<?php
//Conexao banco de dados
include_once 'db/db_connect.php';
//Incluir Cabeçalho
include_once 'includes/header.php';

//Pegando id da URL
if(isset($_GET['id'])):

    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "select p.id_produto, p.nome_produto, p.valor_produto, p.peso_produto, p.quantidadeEstoque_produto, f.nome_fornecedor 
    from produto as p join fornecedores as f on p.id_fornecedor = f.id_fornecedor where id_produto = '$id'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);


    $sql2 = "Select * from fornecedores";
    $resultado2 = mysqli_query($connect, $sql2);


endif;    
?>

<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <h3 class="light">Editar Produto</h3>
        <form action="db/update-produto.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados['id_produto'];?>">

            <div class="input-field col s12">
                <input type="text" name="nome-produto" id="nome-produto" value="<?php echo $dados['nome_produto'];?>">
                <label for="nome-produto">Nome Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="valor-produto" id="valor-produto" value="<?php echo $dados['valor_produto'];?>">
                <label for="valor-produto">Valor Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="peso-produto" id="peso-produto" value="<?php echo $dados['peso_produto'];?>" required>
                <label for="peso-produto">Peso Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="quantidadeEstoque-produto" id="quantidadeEstoque-produto" value="<?php echo $dados['quantidadeEstoque_produto'];?>" required>
                <label for="quantidadeEstoque-produto">Quantidade Produto em Estoque</label>
            </div>
            
            <div class="input-field col s12">
                <h6 class="light">Selecione o Fornecedor</h6>
                <label for="nome-fornecedor"></label>

                    

                <select name="nome-fornecedor" id="nome-fornecedor">

                    <?php while($dados2 = mysqli_fetch_array($resultado2)) { ?>
                        <option value="<?php echo $dados2['id_fornecedor'] ?>"><?php echo $dados2['nome_fornecedor']?></option>

                    <?php  } ?>

                </select>
            </div>

            </div>

            <div class="col s12 center">
                <button type="submit" name="btn-update" class="btn">Atualizar</button>
                <a href="produtos.php" class="btn green">Voltar</a>
            </div>

        </form>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>