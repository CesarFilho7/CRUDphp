<!DOCTYPE html>

<?php include("conexao.php");
    $grupo = selectProdutos();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
    <br>
    <div class="text-center">
        <a class="btn btn-primary" href="inserir.php">Adicionar produto</a>
    </div>
    <br>
    <div class="text-center">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($grupo as $produto){ ?>
                <tr>
                    <td><?=$produto["nome"]?></td>
                    <td><img src=<?=$produto["imagem"]?> alt=""></td>
                    <td><?=$produto["preco"]?></td>
                    <td><?=$produto["descricao"]?></td>
                    <td>
                        <form action="alterar.php" name="alterar" method="POST">
                            <input type="hidden" name="id" value=<?=$produto["id"]?>>
                            <input type="submit" value="Editar" name="editar">
                        </form>
                    </td>
                    <td>
                        <form action="conexao.php" name="excluir" method="POST">
                            <input type="hidden" name="id" value=<?=$produto["id"]?>>
                            <input type="hidden" name="acao" value="excluir">
                            <input type="submit" value="Excluir" name="excluir">
                        </form>
                    </td>
                </tr>
                <?php }
                ?>
            
            </tbody>
        </table>  
    </div> 
        <?php

        ?>
    </body>
</html>
