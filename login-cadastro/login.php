<?php

include "conexao.php";

$emailLogin = $_POST['email'];
//$senhaLogin = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$senhaLogin = $_POST['senha'];
print_r($senhaLogin);
echo "<br>";

$consulta = "SELECT * FROM user WHERE email = ? LIMIT 1;";

$stmt = $mysqli->prepare($consulta);

$stmt->bind_param("s", $emailLogin);

$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($result->num_rows == 0) {
    // Qual o erro que ocorre nesse caso?
    exit;
}

if (!password_verify($senhaLogin, $row['senha'])) {
    //echo "senha correta";
    echo '<script language="javascript">';
    echo 'alert("Dados incoerentes")';
    echo '</script>';
    exit;
}

session_start();
$_SESSION['usuario'] = $row['nome'];
header("location: ..");
