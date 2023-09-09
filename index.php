<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "conn.php";
    $seach = $_POST['seach'];
    $sql = "SELECT * FROM filme WHERE nome LIKE '%$seach%'";
    $result = mysqli_query($conn, $sql);
} else {
    include "conn.php";
    $sql = "SELECT * FROM filme";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Erro na consulta: " . mysqli_error($conn));
    }
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
    <!-- CSS -->
    <link rel="stylesheet" href="./css/index.css">


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
            <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search" name="seach" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Itens -->
    <div class=" container">
        <div class="row">
            <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class=\"col-sm-4\">";
        echo "<div class=\"card\">";
        echo "<img src=\"{$row['imagem']}\" class=\"card-img-top\" alt=\"{$row['nome']}\">";
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title\">{$row['nome']}</h5>";
        echo "<h6 class=\"card-subtitle\">{$row['valor']}</h6>";
        echo "<td>";
        echo "<a href=\"filme_vender.php?id={$row['codigo']}\" class=\"btn btn-outline-success\">Vender</a> ";
        echo "<a href=\"filme_adicionar.php?id={$row['codigo']}\" class=\"btn btn-outline-primary\">Adicionar</a>";
        echo "<a href=\"filme_editar.php?id={$row['codigo']}\" class=\"btn btn-outline-warning\">Editar</a> ";
        echo "<a href=\"filme_excluir.php?id={$row['codigo']}\" class=\"btn btn-outline-danger\">Excluir</a>";

        echo "</td>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

?>
        </div>
    </div>
    <br />
    <a href="./filme_registrar.php" class="btn btn-primary btn-lg">Registrar Filme</a>


</body>

</html>