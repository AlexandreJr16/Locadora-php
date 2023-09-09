<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "conn.php";

        $codigo = $_GET['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];

        $sql = "UPDATE filme SET codigo = '$codigo', nome = '$nome', valor = '$valor',  descricao = '$descricao', imagem = '$imagem' WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: index.php');
            exit();
        }else{
            echo "Erro ao atualizar dados  livro";
            die(mysqli_error($conn));
        }
    }elseif(isset($_GET['id'])){
        include "conn.php";

        $id = $_GET['id'];
        $sql = "SELECT * FROM filme WHERE codigo = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

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
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="codigo" maxlength="255" disabled
                    value="<?php echo isset($row['codigo']) ? $row['codigo'] : ''; ?>">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" maxlength="255" required
                    value="<?php echo isset($row['nome']) ? $row['nome'] : ''; ?>">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" required
                    value="<?php echo isset($row['valor']) ? $row['valor'] : ''; ?>">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" maxlength="255"
                    required><?php echo isset($row['descricao']) ? $row['descricao'] : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" name="imagem" maxlength="255" required
                    value="<?php echo isset($row['imagem']) ? $row['imagem'] : ''; ?>">
            </div>
            <input type="submit" value="Salvar Filme" class="btn btn-primary">
        </form>

    </div>
</body>

</html>