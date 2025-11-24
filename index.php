<?php
include "conexao.php";

$pdo->query("TRUNCATE TABLE tarefas");

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $ins = $pdo->prepare("INSERT INTO tarefas (titulo) VALUES (?)");
    $ins->execute([$titulo]);
}

if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $del = $pdo->prepare("DELETE FROM tarefas WHERE id = ?");
    $del->execute([$id]);
}

$lista = $pdo->query("SELECT * FROM tarefas");
?>

<!DOCTYPE html>
<html>
<body>
 
<h2>Lista de Tarefas</h2>
    
<form method="POST">
    <input type="text" name="titulo" placeholder="Digite a tarefa">
    <button type="submit">Adicionar</button>
</form>

<br>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Tarefa</th>
    <th>Ações</th>
</tr>

<?php while($t = $lista->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $t['id'] ?></td>
    <td><?= $t['titulo'] ?></td>
    <td>
        <a href="editar.php?id=<?= $t['id'] ?>">Editar</a> |
        <a href="index.php?excluir=<?= $t['id'] ?>">Excluir</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>