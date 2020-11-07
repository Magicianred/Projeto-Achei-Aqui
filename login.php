<!-- Pagina de login -->
<?php

include_once ('./php/actions/db_connect.php');
include_once ('./php/includes/header.php')

?>

      <div class="container container-fluid container-conteudo">
        <form class="form-cadastro bg-white mt-5" method="POST" action="./php/actions/logar.php">
          <h2>Login</h2>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" type="email" name="email" id="email">
          </div><!-- form-group -->

          <div class="form-group">
            <label for="senha">Senha</label>
            <input class="form-control" type="password" name="senha" id="senha" required>
          </div><!-- form-group -->

          <button type="submit" class="btn btn-primary text-white" name="logar">Login</button>
          <a href="cadastro.php" class="btn btn-warning text-white">Cadastrar</a>
        </form>
      </div><!-- container-conteudo -->

<?php 

 include_once ('./php/includes/footer.php')

?>
