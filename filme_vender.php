<?php
    include "conn.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

<<<<<<< HEAD
        $air_codigo = $_GET['id'];
        $air_quantidadeRequerida = $_POST['quant'];
        $air_sql = "SELECT * FROM filme WHERE codigo = $air_codigo";
        $air_result = mysqli_query($air_conn, $air_sql);
        $air_row = mysqli_fetch_assoc($air_result);
        if($air_row['quantidadeEstoque']>=$air_quantidadeRequerida){
            $air_num = $air_row['quantidadeEstoque']-$air_quantidadeRequerida;
            $air_sql = "UPDATE filme SET quantidadeEstoque = '$air_num' WHERE codigo = $air_codigo";
            $air_result = mysqli_query($air_conn, $air_sql);

            if($air_result){
=======
        $codigo = $_GET['id'];
        $quantidadeRequerida = $_POST['quant'];
        $sql = "SELECT * FROM filme WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['quantidadeEstoque']>=$quantidadeRequerida){
            $num = $row['quantidadeEstoque']-$quantidadeRequerida;
            $sql = "UPDATE filme SET quantidadeEstoque = '$num' WHERE codigo = $codigo";
            $result = mysqli_query($conn, $sql);

            if($result){
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
                header('Location: index.php');
                exit();
            }
        }else {
<<<<<<< HEAD
            echo '
                <h2
                    style="color: rgb(255,255,255);"
                >Quantidade Inválida.</h2>
            ';
=======
            echo "Quantidade Inválida";
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
        }


    }
    if(isset($_GET['id'])){
<<<<<<< HEAD
        $air_id = $_GET['id'];

        $air_sql = "SELECT * FROM filme WHERE codigo = $air_id";
        $air_result = mysqli_query($air_conn, $air_sql);

        $air_row = mysqli_fetch_assoc($air_result);
=======
        $id = $_GET['id'];

        $sql = "SELECT * FROM filme WHERE codigo = $id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
    }
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/adicionar.css">

    <title>Venda</title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar">
            <a class="navbar-brand" href="index.php"><img src="css/insulfilm.png" alt="Insulfilm"></a>
    </nav>

    <div class="container">
            <?php if($air_row): ?>
                <div class="poster" style="background-image: url('<?php echo $air_row['imagem']; ?>');"></div>
                
                <div class="info">
                    <div class="noneditable">
                        <h1><?php echo $air_row['nome']; ?></h1>
                        <h3><?php echo $air_row['descricao']; ?><h3>
                        <p><strong>Código:</strong> <?php echo $air_row['codigo']; ?></p>
                        <p><strong>Valor:</strong> <?php echo $air_row['valor']; ?></p>
                        <p><strong>Quantidade em Estoque:</strong> <?php echo $air_row['quantidadeEstoque']; ?></p>                    
                    </div>
                    

                    <form method="POST">
                        <div class="formulario">
                            <label for="codigo" class="form-label">Vender</label>
                            <input type="number" class="form-control" name="quant" maxlength="255" required>
                            <p>unidades</p>
                        </div>
                        <div class="control">
                            <input type="submit" class="button" value="Vender"></input>
                            <a class="button" href="index.php">Voltar</a>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
=======
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/adicionar.css">

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
        <div class="row">
            <div class="col">
                <div class="container">
                    <img src="<?php echo $row['imagem']; ?>" class="img">
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <?php if($row): ?>
                    <h2 class="title-lg">Detalhes do Filme</h2>
                    <p class="lead"><strong>Código:</strong> <?php echo $row['codigo']; ?></p>
                    <p class="lead"><strong>Nome:</strong> <?php echo $row['nome']; ?></p>
                    <p class="lead"><strong>Valor:</strong> <?php echo $row['valor']; ?></p>
                    <p class="lead"><strong>Quantidade em Estoque:</strong> <?php echo $row['quantidadeEstoque']; ?></p>
                    <p class="lead"><strong>Descrição:</strong> <?php echo $row['descricao']; ?></p>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Quantidade</label>
                            <input type="text" class="form-control" name="quant" maxlength="255" required>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Vender"></input>
                        <a class="btn btn-secondary btn-lg" href="index.php">Voltar</a>
                    </form>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
</body>

</html>