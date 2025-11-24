## To-Do List em PHP
- Projeto simples de lista de tarefas feito em PHP + MySQL, usando PDO para conectar no banco. Aqui dá pra adicionar, listar, editar e excluir tarefas. Nada complexo, só o básico funcionando bem.

# Como funciona:
- A página principal (index.php) mostra todas as tarefas cadastradas.
- No topo tem um campo de texto onde você digita a tarefa e adiciona.
- Cada tarefa aparece numa tabela junto com os botões de Editar e Excluir.
- No arquivo editar.php você consegue mudar o nome da tarefa.
- As ações são todas salvas no banco.

# Banco de dados:
Usei uma tabela chamada tarefas, com duas colunas (só rodar no phpmyadmin):
- id: inteiro, auto-incremento
- titulo: texto da tarefa

# Como rodar: 
- Coloque a pasta dentro do htdocs (caso esteja usando XAMPP).
- Suba o servidor Apache e o MySQL.
- Crie o banco e execute o script.
- Acesse no navegador:
http://localhost/ToDo-List/index.php
