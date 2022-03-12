<?php
include_once 'includes/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <h3 class="light">Cadastrar Fornecedor</h3>
        <form action="db/create-fornecedor.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome-fornecedor" id="nome-fornecedor" required>
                <label for="nome-fornecedor">Nome Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email-fornecedor" id="email-fornecedor" required>
                <label for="email-fornecedor">E-mail Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cnpj" id="cnpj" required>
                <label for="cnpj">CNPJ</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="razao-social" id="razao-social" required>
                <label for="razao-social">Razão Social</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nome-fantasia" id="nome-fantasia" required>
                <label for="nome-fantasia">Nome Fantasia</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone-fornecedor" id="telefone-fornecedor" required>
                <label for="telefone-fornecedor">Telefone Fornecedor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="celular-vendedor" id="celular-vendedor" required>
                <label for="celular-vendedor">Celular Vendedor</label>
            </div>

            <div class="col s12 center">
                <button type="submit" name="btn-create" class="btn">Cadastrar</button>
                <button type="reset" class="btn red">Apagar</button>
                <a href="index.php" class="btn green">Voltar</a>
            </div>

        </form>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>