<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="kanban.css" />
  <title>Quadro Kanban</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <header class="nav">
    <nav>
      <h1>Quadro Kanban</h1>
    </nav>
  </header>

  <main class="kanban-container">

    <div class="kanban-coluna">
      <h2>Pendentes</h2>
      <div class="tasks" id="pending-tasks"></div>
      <button class="add-task" type="submit" onclick="abrirFormulario()">Adicionar Tarefa</button>
    </div>

    <div class="kanban-coluna">
      <h2>Em Atendimento</h2>
      <div class="tasks" id="in-progress-tasks"></div>
      <button class="add-task" type="submit" onclick="abrirFormulario()">Adicionar Em Atendimento</button>
    </div>

    <div class="kanban-coluna">
      <h2>Retorno ao Cliente</h2>
      <div class="tasks" id="cliente-return-tasks"></div>
      <button class="add-task" type="submit" onclick="abrirFormulario()">Adicionar Retorno ao Cliente</button>
    </div>

    <div class="kanban-coluna">
      <h2>Concluído</h2>
      <div class="tasks" id="completed-tasks"></div>
      <button class="add-task" type="submit" onclick="abrirFormulario()">Adicionar Concluídos</button>
    </div>

    <div class="popUp_informacoes">

      <form action="../class/adicionar_cards.php">

        <div class="elementos">
          <label for="">Digite o título da tarefa: </label>
          <input type="text" id="title_card">
        </div>

        <div class="elementos">
          <label for="">Digite a tarefa: </label>
          <textarea name="" id="tarefa_card"></textarea>
        </div>

        <div class="elementos">
          <label for="">Digite o responsavel: </label>
          <input type="text" id="reponsavel_card">
        </div>

      </form>

    </div>


  </main>

</body>

<script>
  function adicionarTarefa() {
    let title = document.getElementById("title_card")
    let tarefa = document.getElementById("tarefa_card")
    let reponsavel = document.getElementById("reponsavel_card")

    let p = document.createElement('p')
    p.className = 'dados_card'
    p.innerHTML = tarefa
  }
</script>

</html>