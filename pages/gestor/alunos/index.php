<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar e remover usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style/global.css">
    <link rel="stylesheet" href="../../../style/alunos.css">
</head>

<body>

    <script>
        function confirmDelete() {
            return confirm("Tem certeza que deseja apagar este registro?");
        }
    </script>
    <?php
    include __DIR__ .  "../../../../templates/nav.php";
    ?>

    <div class="container">

        <h2 class="mt-4 mb-4 text-white text-center fw-semibold">Editar e remover usuários</h2>

        <div id="resultsTable">
            <div class="table-responsive">
                <table class="table table-light text-center">
                    <thead>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Tipo</th>
                        <th>Plano</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        $model = new Member(connection());
                        // Recupere os dados do banco de dados usando a função findAll
                        $data = $model->findAll();

                        while ($row = $data->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['age'] . '</td>';
                            echo '<td>' . $row['type'] . '</td>';
                            echo '<td>' . $row['plan'] . '</td>';
                            echo '<td><a href="/members/crud/formToEdit?email=' . $row['email'] . '"><i><img width="30" src="../../../assets/icons/lapis.png"></img></i></a></td>';
                            echo '<td><a href="/members/crud/delete?id=' . $row['id'] . '" onclick="return confirmDelete();"><i><img width="30" src="../../../assets/icons/lixo.png"></img></i></a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>