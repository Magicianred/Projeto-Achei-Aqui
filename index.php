<!-- Pagina Inicial do Site -->
<?php 
    include_once ('./php/actions/db_connect.php');

    include_once ('./php/includes/header.php')
?>

<div class="container-conteudo">
    <img src="./imagens/AcheiAquiLogo2.png" alt="logo" width="400px">
        <h3>Nosso objetivo</h3>
            <div class="text">
                <p>Este site tem como objetivo ajudar a população em relação a pertences perdidos. Onde a pessoa que perdeu algo possa relatar em nosso site, e a pessoa que encontrar algo também possa compartilhar. Assim facilitando a busca de todos.</p>
            </div><!-- text -->
            <a class=" btn btn-warning btn-lg amarelo text-white" href="./login.php">Login</a>
            <a class="btn btn-outline-warning btn-lg text-white" href="cadastro.php">Cadastrar</a>
</div><!-- container-conteudo -->

<?php 
    include_once ('./php/includes/footer.php') 
?>


