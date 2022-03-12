<?php
//Conexao banco de dados
include_once 'db/db_connect.php';
//Incluir Cabeçalho
include_once 'includes/header.php';

//Pegando id da URL
if(isset($_GET['id'])):

    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM fornecedores WHERE id_fornecedor = '$id'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);

    //echo '<pre>';
    //print_r($dados);
    //echo '</pre>';
endif;    
?>

<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <h3 class="light">Editar Fornecedor</h3>
        <form action="db/update-fornecedor.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados['id_fornecedor'];?>">

            <div class="input-field col s12">
                <input type="text" name="nome-fornecedor" id="nome-fornecedor" value="<?php echo $dados['nome_fornecedor'];?>">
                <label for="nome-fornecedor">Nome Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email-fornecedor" id="email-fornecedor" value="<?php echo $dados['email_fornecedor'];?>">
                <label for="email-fornecedor">E-mail Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cnpj" id="cnpj" value="<?php echo $dados['cnpj_fornecedor'];?>" required>
                <label for="cnpj">CNPJ</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="razao-social" id="razao-social" value="<?php echo $dados['razaoSocial_fornecedor'];?>" required>
                <label for="razao-social">Razão Social</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nome-fantasia" id="nome-fantasia" value="<?php echo $dados['nomeFantasia_fornecedor'];?>" required>
                <label for="nome-fantasia">Nome Fantasia</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone-fornecedor" id="telefone-fornecedor" value="<?php echo $dados['telefone_fornecedor'];?>" required>
                <label for="telefone-fornecedor">Telefone Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="celular-vendedor" id="celular-vendedor" value="<?php echo $dados['celular_vendedor'];?>" required>
                <label for="celular-vendedor">Celular Vendedor</label>
            </div>

            <div class="col s12 center">
                <button type="submit" name="btn-update" class="btn">Atualizar</button>
                <a href="index.php" class="btn green">Voltar</a>
            </div>

        </form>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>