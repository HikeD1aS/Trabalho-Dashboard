<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="dash.css">
</head>

<body>


    <div class="dashboard-container">
           <?php include 'menu.php';?>

        <main>
            <section class="container-cards">
                <article>
                    <h2>Módulo de Usuário</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Categorias</h2>
                    <p>Visualizee gerencie as postagens do sistema.</p>
                    <a href="categorias.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Postagens</h2>
                    <p>Visualize e gerencie as postagens do sistema.</p>
                    <a href="postagens.php" class="btn">Acessar</a>
                </article>
            </section>
        </main>

    </div>

        <?php include 'footer.php';?>

</body>

</html>