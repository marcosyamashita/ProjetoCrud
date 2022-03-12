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
      <h3 class="light">Fornecedores</h3>
        <table class="striped">
                  <thead>
                      <tr>
                        <th>Nome Fornecedor: </th>
                        <th>E-mail Fornecedor: </th>
                        <th>CNPJ: </th>
                        <th>Razão Social: </th>
                        <th>Nome Fantasia: </th>
                        <th>Telefone: </th>
                        <th>Celular Vendedor: </th>
                      </tr>
                  </thead>

                  <tbody>

                    <?php
                    $sql = "SELECT * FROM fornecedores";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>

                    <tr>
                      <td><?php echo $dados['nome_fornecedor']; ?></td>
                      <td><?php echo $dados['email_fornecedor']; ?></td>
                      <td><?php echo $dados['cnpj_fornecedor']; ?></td>
                      <td><?php echo $dados['razaoSocial_fornecedor']; ?></td>
                      <td><?php echo $dados['nomeFantasia_fornecedor']; ?></td>
                      <td><?php echo $dados['telefone_fornecedor']; ?></td>
                      <td><?php echo $dados['celular_vendedor']; ?></td>
                      <td><a href="editar-fornecedor.php?id=<?php echo $dados['id_fornecedor']; ?>" class="btn-floating gray"><i class="material-icons">create</i></a></td>


                      <td><a href="#modal<?php echo $dados['id_fornecedor']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>


                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id_fornecedor']; ?>" class="modal">
                          <div class="modal-content">
                            <h4>Deseja Realmente Excluir???</h4>
                          </div>
                          <div class="modal-footer">

                            <form action="db/delete-fornecedor.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $dados['id_fornecedor']; ?>">
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
          <a href="adicionar-fornecedores.php" class="btn">Adicionar Fornecedores</a>

          <a href="index.php" class="btn green">Voltar</a>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>