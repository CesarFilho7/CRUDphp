<?php 
if(isset($_POST["acao"])){
   if($_POST["acao"] == "inserir"){
      inserirProduto();
   }
   if($_POST["acao"] == "alterar"){
      alterarProduto();
   }
   if($_POST["acao"] == "excluir"){
      excluirProduto();
   }
}

function abrirBanco(){
   $conexao = new mysqli("localhost", "root", "","dbprodutos");
   return $conexao;
}

function inserirProduto(){
   $arquivo = $_FILES['arquivo'];
   if($arquivo['size'] > 9000000){
      exit('Arquivo muito grande. Tamanho máximo permitido 500kb.');
   }
   $dir = "img/";
   $caminho = $dir.$arquivo['name'];
   $img = $arquivo['tmp_name'];
   move_uploaded_file($img, $caminho);
   $banco = abrirBanco();
   $sql = "INSERT INTO produto(nome, preco, descricao, imagem)"
   . "VALUES ('{$_POST["nome"]}','{$_POST["preco"]}','{$_POST["descricao"]}','{$caminho}')";
   $banco->query($sql);
   $banco->close();
   voltarAoIndex();
}

function alterarProduto(){
   $banco = abrirBanco();
   $sql = "UPDATE produto SET nome='{$_POST["nome"]}', preco='{$_POST["preco"]}', descricao='{$_POST["descricao"]}', imagem='{$_POST["imagem"]}' WHERE id='{$_POST["id"]}'";
   $banco->query($sql);
   $banco->close();
   voltarAoIndex();
}

function excluirProduto(){
   $banco = abrirBanco();
   $sql = "DELETE FROM produto WHERE id='{$_POST["id"]}'";
   $banco->query($sql);
   $banco->close();
   voltarAoIndex();
}

function selectProdutos(){
   $banco = abrirBanco();
   $sql = "SELECT * FROM produto";
   $resultado = $banco->query($sql);
   $banco->close();
   while($row = mysqli_fetch_array($resultado)){
      $grupo[] = $row;
   }
   return $grupo;
}

function selectIdProduto($id){
   $banco = abrirBanco();
   $sql = "SELECT * FROM produto WHERE id=".$id;
   $resultado = $banco->query($sql);
   $banco->close();
   $produto = mysqli_fetch_assoc($resultado);
   return $produto;
}

function voltarAoIndex(){
   header("Location:index.php");
}