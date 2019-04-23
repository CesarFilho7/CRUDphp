<?php include("conexao.php");
    $produto = selectIdProduto($_POST["id"]);
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">

<form class="form-group container" name="dadosProdutos" action="conexao.php" method="POST">
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <th class="text-center">Nome:</th>
                <td><input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>" size="20"></td>
            </tr>
            <tr>
                <th class="text-center">Preço:</th>
                <td><input class="form-control" type="number" name="preco" value="<?=$produto["preco"]?>"></td>
            </tr>
            <tr>
                <th class="text-center">Descrição:</th>
                <td><input class="form-control" type="text" name="descricao" value="<?=$produto["descricao"]?>" size="20"></td>
            </tr>
            <tr>
                <th class="text-center">Imagem:</th>
                <!-- <input class="form-control" type="file" name="imagem" value="<?=$produto["imagem"]?>" size="20"> -->
                <td>
                    <form action="conexao.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="arquivo" value="<?=$produto["imagem"]?>" size="20">
                    </form>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="alterar"/>
                    <input type="hidden" name="id" value="<?=$produto["id"]?>">
                </td>
                <td><input class="btn btn-primary btn-lg"  type="submit" name="Enviar" value="Enviar"></td>
            </tr>
        </tbody>
    </table>
</form>
