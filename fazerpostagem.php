<!-- Pagina para fazer publicações -->
<?php 
    include_once ('./php/actions/db_connect.php');

    include_once ('./php/includes/header.php')
?>

<div class="container container-fluid container-conteudo">
  <form class="form-cadastro bg-white mt-5" method="POST" action="./php/actions/postar.php">
    <h2>Fazer postagem</h2>
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input class="form-control" type="text" name="titulo" id="titulo" required>
      </div><!-- form-group -->

      <div class="form-group">
        <label for="conteudo">Conteudo</label>
        <textarea rows="7" cols="50" maxlength="225" class="form-control" name="conteudo" id="conteudo" required></textarea>
      </div><!-- form-group -->

      <button type="submit" class="btn btn-primary text-white" name="publicar">Publicar</button>
        <a href="cadastro.php" class="btn btn-danger text-white">Cancelar</a>
  </form>
</div><!-- container-conteudo -->

<?php 
  include_once ('./php/includes/footer.php') 
?>
