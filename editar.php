<?php
include "conexao.php";

$id = $_GET['id'];
$consulta = $pdo->prepare("SELECT * FROM tarefas WHERE id = ?");
$consulta->execute([$id]);
$tarefa = $consulta->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['titulo'])) {
    $novo = $_POST['titulo'];
    $att = $pdo->prepare("UPDATE tarefas SET titulo = ? WHERE id = ?");
    $att->execute([$novo, $id]);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Editar Tarefa</h2>

<form method="POST">
    <input type="text" name="titulo" value="<?= $tarefa['titulo'] ?>">
    <button type="submit">Salvar</button>
</form>

</body>
</html>