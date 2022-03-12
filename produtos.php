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
    <div class="col s12 m12">
      <h3 class="light">Produtos</h3>
        <table class="striped">
                  <thead>
                      <tr>
                        <th>Nome Produto: </th>
                        <th>Valor Produto: </th>
                        <th>Peso: </th>
                        <th>Quantidade Estoque: </th>
                        <th>Fornecedor</th>
                      </tr>
                  </thead>

                  <tbody>

                    <?php
                    $sql = "select p.id_produto, p.nome_produto, p.valor_produto, p.peso_produto, p.quantidadeEstoque_produto, f.nome_fornecedor 
                    from produto as p join fornecedores as f on p.id_fornecedor = f.id_fornecedor";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>

                    <tr>
                      <td><?php echo $dados['nome_produto']; ?></td>
                      <td><?php echo $dados['valor_produto']; ?></td>
                      <td><?php echo $dados['peso_produto']; ?></td>
                      <td><?php echo $dados['quantidadeEstoque_produto']; ?></td>
                      <td><?php echo $dados['nome_fornecedor']; ?></td>


                      <td><a href="editar-produto.php?id=<?php echo $dados['id_produto']; ?>" class="btn-floating gray"><i class="material-icons">create</i></a></td>


                      <td><a href="#modal<?php echo $dados['id_produto']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>


                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id_produto']; ?>" class="modal">
                          <div class="modal-content">
                            <h4>Deseja Realmente Excluir o Produto???</h4>
                          </div>
                          <div class="modal-footer">

                            <form action="db/delete-produto.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $dados['id_produto']; ?>">
                              <button type="submit" name="btn-delete" class="btn red">Sim, quero deletar</button>

                              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>


                            </form>

                          </div>
                        </div>


                    </tr>

                    <?php endwhile; ?>

                  </tbody>
          </table>
          <br>
          <a href="adicionar-produtos.php" class="btn">Adicionar Produtos</a>

          <a href="index.php" class="btn green">Voltar</a>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>