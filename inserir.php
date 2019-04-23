<?php
  
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">

<form class="form-group container" name="dadosProdutos" action="conexao.php" method="POST" enctype="multipart/form-data">
    <table class="table table-bordered table-hover">
        <tbody>
            <tr>
                <th class="text-center">Nome:</th>
                <td><input class="form-control" type="text" name="nome" value=""></td>
            </tr>
            <tr>
                <th class="text-center">Preço:</th>
                <td><input class="form-control" type="number" name="preco" value=""></td>
            </tr>
            <tr>
                <th class="text-center">Descrição:</th>
                <td><textarea class="form-control" rows="4" id="descricao" name="descricao"></textarea></td>
            </tr>
            <tr>
                <th class="text-center">Imagem:</th>
                 <td><input type="file" name="arquivo" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="inserir"/></td>
                <td><input class="btn btn-primary btn-lg"  type="submit" name="Enviar" value="Enviar"></td>
            </tr>
        </tbody>
    </table>
</form>