<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
 </head>
 <body>
      <title>Formulário de Inscrição</title>
    <h1>Formulário de Inscrição</h1>
    <form action="processar.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <!-- Resto do formulário -->

        <input type="submit" value="Enviar">
     </body>
 </html>

    <h1>Informações Recebidas</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $genero = $_POST["genero"];
        $pagamento = $_POST["pagamento"];
        $aulas = $_POST["aulas"];

        echo "<p>Email: $email</p>";
        echo "<p>Telefone: $telefone</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Gênero: $genero</p>";
        echo "<p>Forma de Pagamento: $pagamento</p>";

        if (!empty($aulas)) {
            echo "<p>Aulas Selecionadas:</p>";
            echo "<ul>";
            foreach ($aulas as $aula) {
                echo "<li>$aula</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhuma aula selecionada.</p>";
        }
    } else {
        echo "O formulário não foi submetido.";
    }
    ?>

<?php
// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Verificar se o email já está cadastrado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Este email já está cadastrado. Por favor, use outro email.";
    } else {
        // O email não está cadastrado, prosseguir com o processamento do formulário
        // Insira os dados do formulário no banco de dados
        // Lembre-se de escapar e validar os dados antes de inseri-los no banco de dados

        // Depois de inserir os dados no banco de dados, você pode exibir uma mensagem de confirmação
        echo "Cadastro realizado com sucesso!";
    }
}

$conn->close();
?>

</body>
</html>
