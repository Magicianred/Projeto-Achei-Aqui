<!-- Pagina para ver publicações -->
<?php 
    include_once ('./php/actions/db_connect.php');

    session_start();

    include_once ('./php/includes/header.php');
   
    $sql = "select titulo, conteudo from postagens;";

    $resultado = mysqli_query($connect, $sql);
?>

<div class="container">
    <table class="table table-striped table-hover table-dark table-bordered table-responsive">
        <thead>
            <tr>
                <th>Título</th>
                <th>Conteúdo</th>
            </tr>
        </thead>
        
<?php
    while($row = mysqli_fetch_assoc($resultado)){
?>
    <tr>
         <td class="align-middle">
            <?php echo $row['titulo'] ?>
         </td>
         <td class="align-middle">
            <?php echo $row['conteudo'] ?>
        </td>
    
<?php
    }
?>

    </table>
        <a href="fazerpostagem.php" class="btn btn-primary">Fazer Postagem</a>
</div><!-- container -->


<?php 
    include_once ('./php/includes/footer.php') 
?>
