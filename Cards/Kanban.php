<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quadro Kanban</title>
  <link rel="stylesheet" href="Kanban.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <header class="nav">
    <nav>
      <h1 style="text-align: center;">Quadro Kanban</h1>
    </nav>
  </header>

  <main class="kanban-container">
    <div class="kanban-coluna">
      <h2>Pendentes</h2>
      <div class="tasks" id="pending-tasks"></div>
      <button class="add-task" onclick="abrirFormulario('pending-tasks')">Adicionar Tarefa</button>
    </div>

    <div class="kanban-coluna">
      <h2>Em Atendimento</h2>
      <div class="tasks" id="in-progress-tasks"></div>
      <button class="add-task" onclick="abrirFormulario('in-progress-tasks')">Adicionar Em Atendimento</button>
    </div>

    <div class="kanban-coluna">
      <h2>Retorno ao Cliente</h2>
      <div class="tasks" id="cliente-return-tasks"></div>
      <button class="add-task" onclick="abrirFormulario('cliente-return-tasks')">Adicionar Retorno ao Cliente</button>
    </div>

    <div class="kanban-coluna">
      <h2>Concluído</h2>
      <div class="tasks" id="completed-tasks"></div>
      <button class="add-task" onclick="abrirFormulario('completed-tasks')">Adicionar Concluídos</button>
    </div>
  </main>

  <div class="popUp_informacoes" style="display: none;">
    <form id="form_informacoes">
      <input type="hidden" name="form_informacoes" value="1">

      <div class="elementos">
        <label for="title_card">Digite o título da tarefa:</label>
        <input type="text" id="title_card" name="title_card" required>
      </div>

      <div class="elementos">
        <label for="tarefa_card">Digite a tarefa:</label>
        <textarea id="tarefa_card" name="tarefa_card" required></textarea>
      </div>

      <div class="elementos">
        <label for="responsavel_card">Digite o responsável:</label>
        <input type="text" id="responsavel_card" name="responsavel_card" required>
      </div>

      <div class="elementos">
        <button type="submit">Criar</button>
        <button type="button" onclick="fecharFormulario()">Cancelar</button>
      </div>
    </form>
  </div>

  <script>
    let colunaAtual = "pending-tasks";

    function abrirFormulario(colunaId) {
      colunaAtual = colunaId;
      document.querySelector(".popUp_informacoes").style.display = "block";
    }

    function fecharFormulario() {
      document.querySelector(".popUp_informacoes").style.display = "none";
      document.getElementById("title_card").value = "";
      document.getElementById("tarefa_card").value = "";
      document.getElementById("responsavel_card").value = "";
    }

    $(document).ready(function () {
      $('#form_informacoes').on('submit', function (e) {
        e.preventDefault(); 

        const title = $('#title_card').val().trim();
        const subject = $('#tarefa_card').val().trim();
        const responsible = $('#responsavel_card').val().trim();

        if (!title || !subject || !responsible) {
          Swal.fire("Erro", "Preencha todos os campos!", "error");
          return;
        }

        $.post('../controller/controllerAdicionarCards.php', {
          form_informacoes: 1,
          title_card: title,
          tarefa_card: subject,
          responsavel_card: responsible
        }, function (resposta) {
          let card = document.createElement("div");
          card.className = "card";
          card.innerHTML = `
            <h3>${title}</h3>
            <p>${subject}</p>  
            <p><strong>Responsável:</strong> ${responsible}</p>
            <button class="btn-excluir" onclick="this.parentElement.remove()">Excluir</button>
          `;
          document.getElementById(colunaAtual).appendChild(card);

          fecharFormulario();

          Swal.fire("Sucesso!", "Tarefa adicionada com sucesso!", "success");
        });
      });
    });
  </script>
</body>

</html>
