<!-- Pagina de cadastro -->
<?php 
include_once ('./php/actions/db_connect.php');
  include_once ('./php/includes/header.php')
?>

    <div class="container container-fluid container-conteudo">
      <form class="form-cadastro bg-white" method="POST" action="./php/actions/cadastrar.php">
        <h2>Cadastre-se</h2>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input class="form-control" type="text" name="nome" id="nome" required>
        </div><!-- form-group -->

        <div class="form-group">
          <label for="email">E-mail</label>
          <input class="form-control" type="email" name="email" id="email" required>
        </div><!-- form-group -->

        <div class="form-group">
          <label for="senha">Senha</label>
          <input class="form-control" type="password" name="senha" id="senha" required>
        </div><!-- form-group -->

        <button type="submit" class="btn btn-primary text-white" name="cadastrar">Cadastrar</button>
        <a href="login.php" class="btn btn-warning text-white">Login</a>
      </form>
    </div><!-- container-conteudo -->

<?php 

 include_once ('./php/includes/footer.php')

?>

