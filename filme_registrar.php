<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "conn.php";

<<<<<<< HEAD
        $air_nome = $_POST['nome'];
        $air_valor = $_POST['valor'];
        $air_descricao = $_POST['descricao'];
        $air_imagem = $_POST['imagem'];
        $air_estoque = $_POST['estoque'];

        if($air_estoque<0 || $air_valor<=0){
            echo '
                <h2
                    style="color: rgb(255,255,255);"
                >Insira números válidos</h2>
            ';
        }
        else{
            $air_sql = "INSERT INTO filme (quantidadeEstoque, nome, valor, descricao, imagem)
            VALUES ('$air_estoque', '$air_nome', '$air_valor', '$air_descricao', '$air_imagem')";
            $air_result = mysqli_query($air_conn, $air_sql);

            if($air_result){
                header('Location: index.php');
                exit();
            }else{
                echo "Erro ao atualizar dados  livro";
                die(mysqli_error($air_conn));
            }   
=======
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];
        $estoque = $_POST['estoque'];

        $sql = "INSERT INTO filme (quantidadeEstoque, nome, valor, descricao, imagem)
        VALUES ('$estoque', '$nome', '$valor', '$descricao', '$imagem')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: index.php');
            exit();
        }else{
            echo "Erro ao atualizar dados  livro";
            die(mysqli_error($conn));
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<<<<<<< HEAD
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/editar.css">

    <title>Registrar Filme</title>
=======
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
</head>

<body>

<<<<<<< HEAD
    <!-- Header -->
    <nav class="navbar">
            <a class="navbar-brand" href="index.php"><img src="css/insulfilm.png" alt="Insulfilm"></a>
    </nav>


    <div class="container">
        <h1>Registrar Filme</h1>
        <form action="" method="POST">
            <div class="field">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" maxlength="255" required
                >
           </div>

            <div class="field">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" maxlength="255"
                    required></textarea>
            </div>
           
            <div class="field">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" name="valor" step="0.01" required>
            </div>
           
            <div class="field">
                <label for="quantidade" class="form-label">Quantidade em estoque</label>
                <input type="number" class="form-control" name="estoque" maxlength="255" required></input>
            </div>
           
            <div class="field">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" name="imagem" maxlength="255" required>
            </div>
            <div class="control">
                <input type="submit" value="Salvar Filme" class="button">
                <a class="button" href="index.php">Voltar</a>
            </div>
        </form>
=======
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Header -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Locadora</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h2>Inserir/Atualizar Dados do Filme</h2>
        <form action="" method="POST">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" maxlength="255" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" maxlength="255" required></textarea>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Quantidade em estoque</label>
                <input type="number" class="form-control" name="estoque" maxlength="255" required></input>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" name="imagem" maxlength="255" required>
            </div>
            
            <input type="submit" value="Salvar Filme" class="btn btn-primary">
        </form>

>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
    </div>
</body>

</html>