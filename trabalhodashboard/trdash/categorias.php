<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <div class="header-content">
                <div>
                    <h2>Categorias</h2>
                    <p>Visualize e gerencie as categorias do sistema</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add"><i class="fa-solid fa-plus"></i>Adicionar Categoria</a>
            </div>

            <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
        <tbody>
                <tr>
                    <td>01</td>
                    <td>Categoria 1</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Categoria 2</td>
                    <td><span class="badge inativo">Inativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>   
                </tr>
                <tr>
                    <td>03</td>
                    <td>Categoria 3</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>  
                </tr>
        </tbody>
        </table>
            </div>
        </main>
    </div>
</body>
</html>