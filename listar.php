<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - Patinhas Felizes</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 Patinhas Felizes</h1>
        <p>Encontre seu novo melhor amigo</p>
    </header>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Animal</a>
        <a href="listar.php">Animais para Adoção</a>
    </nav>

    <div class="container">
        <h2>Animais Disponíveis para Adoção</h2>

        <div class="grid">
           <table>
  
        <tr>
            
            <th>Nome</th>
            <th>Espécie</th>
            <th>Idade</th>
            <th>Porte</th>
            <th>Descrição</th>
            
        </tr>
    

        <!-- AQUI ESCREVER O CÓDIGO EM PHP QUE BUSCA OS ANIMAIS NO BANCO E DADOS E EXIBE NAS LINHAS E COLUNAS DA TABELA -->
        <?php 
        include 'db.php';
        $sql = "SELECT * FROM animais ORDER BY idade DESC";
        $result = $conexao->query($sql);
        while($line = $result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $line['nome'] . "</td>";
                echo "<td>" . $line['especie'] . "</td>";
                echo "<td>" . $line['idade'] . "</td>";
                echo "<td>" . $line['porte'] . "</td>";
                echo "<td>" . $line['descricao'] . "</td>";
                echo "</tr>";
            }

        ?>

</table>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
    </footer>

</body>
</html>