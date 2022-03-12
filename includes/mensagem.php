<?php
//Iniciando a sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script>
  //Mensagem com materialize
  window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
  };
</script>

<?php
endif;
session_unset();
?>