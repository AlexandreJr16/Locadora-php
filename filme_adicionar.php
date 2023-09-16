<?php
    include "conn.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

<<<<<<< HEAD
        $air_codigo = $_GET['id'];
        $air_quantidadeRequerida = $_POST['quant'];
        $air_sql = "SELECT * FROM filme WHERE codigo = $air_codigo";
        $air_result = mysqli_query($air_conn, $air_sql);
        $air_row = mysqli_fetch_assoc($air_result);
        $air_num = $air_row['quantidadeEstoque']+$air_quantidadeRequerida;
        $air_sql = "UPDATE filme SET quantidadeEstoque = '$air_num' WHERE codigo = $air_codigo";
        $air_result = mysqli_query($air_conn, $air_sql);

        if($air_result){
            header('Location: index.php');
            exit();
        }
    }

    if(isset($_GET['id'])){
        $air_id = $_GET['id'];

        $air_sql = "SELECT * FROM filme WHERE codigo = $air_id";
        $air_result = mysqli_query($air_conn, $air_sql);

        $air_row = mysqli_fetch_assoc($air_result);
=======
        $codigo = $_GET['id'];
        $quantidadeRequerida = $_POST['quant'];
        $sql = "SELECT * FROM filme WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $num = $row['quantidadeEstoque']+$quantidadeRequerida;
        $sql = "UPDATE filme SET quantidadeEstoque = '$num' WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: index.php');
            exit();
        }



    }
    if(isset($_GET['id'])){
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

    <link rel="stylesheet" href="./css/index.css">
    
    <link rel="stylesheet" href="./css/adicionar.css">

<<<<<<< HEAD
    <title>Adicionar Filme</title>
=======
    <title>Document</title>
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
</head>

<body>
    <!-- Header -->
    <nav class="navbar">
<<<<<<< HEAD
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
                            <label for="codigo" class="form-label">Adicionar</label>
                            <input type="number" class="form-control" name="quant" min="1" maxlength="255" required>
=======
            <a class="navbar-brand"><img src="css/insulfilm.png" alt="Insulfilm"></a>
    </nav>

        <div class="container">
            <?php if($row): ?>
                <div class="poster" style="background-image: url('<?php echo $row['imagem']; ?>');"></div>
                
                <div class="info">
                    <h1><?php echo $row['nome']; ?></h1>
                    <h3><?php echo $row['descricao']; ?><h3>
                    <p><strong>Código:</strong> <?php echo $row['codigo']; ?></p>
                    <p><strong>Valor:</strong> <?php echo $row['valor']; ?></p>
                    <p><strong>Quantidade em Estoque:</strong> <?php echo $row['quantidadeEstoque']; ?></p>

                    <form method="POST">
                        <div class="form">
                            <label for="codigo" class="form-label">Adicionar</label>
                            <input type="number" class="form-control" name="quant" maxlength="255" required>
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
                            <p>unidades</p>
                        </div>
                        <div class="control">
                            <input type="submit" class="button" value="Add"></input>
                            <a class="button" href="index.php">Voltar</a>
                        </div>
<<<<<<< HEAD
=======
                        
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
                    </form>
                </div>
            <?php endif; ?>
        </div>
</body>

</html>