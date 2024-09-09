<?php
// Configurações do banco de dados da app1
$servername = "db1";  // ou "db2" para app2
$username = "user1";  // ou "user2" para app2
$password = "password1";  // ou "password2" para app2
$dbname = "app1_db";  // ou "app2_db" para app2

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir o charset como UTF-8
$conn->set_charset("utf8mb4");

// Consultar as frutas
$sql = "SELECT id, nome FROM frutas";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Frutas - App1</title>
</head>
<body>
    <h1>Tabela de Frutas - App1</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nenhuma fruta encontrada</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Fechar a conexão
    $conn->close();
    ?>
</body>
</html>
