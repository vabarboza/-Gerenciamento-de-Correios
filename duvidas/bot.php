<?php
include_once('../header.php');
include_once('../footer.php');
?>

<main>
  <style>
    df-messenger {
      --df-messenger-bot-message: #b71c1c;
      --df-messenger-button-titlebar-color: #f79702;
      --df-messenger-chat-background-color: #fafafa;
      --df-messenger-font-color: white;
      --df-messenger-send-icon: #878fac;
      --df-messenger-user-message: #9613E8;
    }
  </style>



  <div class="card bg-laranja containermenor">
    <div class="card-image">
      <img height="300px" src="img/bots/belnew.svg">
    </div>
  </div>


  <div class="container bg-fundo">
    <h4 class="header">Assistente Virtual Bellinati</h4>
    <p class="grey-text text-darken-3 lighten-3">Chatbot (ou chatterbot) é um programa de computador que tenta simular
      um ser humano na conversação com as pessoas.
      <br><br>
      O objetivo é responder as perguntas de tal forma que as pessoas
      tenham a impressão de estar conversando com outra pessoa e não com um programa de computador.
      <br><br>
      Após o envio de
      perguntas em linguagem natural, o programa consulta uma base de conhecimento e em seguida fornece uma resposta
      que
      tenta imitar o comportamento humano.</p>
  </div>

  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <df-messenger chat-icon="img/bots/gahag-ok2.svg" intent="WELCOME" chat-title="Bellinati"
    agent-id="09b642d6-95a3-4b2e-9eab-e94f0d24fad3" language-code="pt-br">
  </df-messenger>

</main>

<footer class="page-footer bg-danger-dark">
  <div class="container-fluid">

    <div class="row">

      <div class="col s3">
        <img height="160px" src="img/bots/gahag-ok2.svg">
      </div>

      <div class="col s9">
        <div class="col l6 s12">
          <h5 class="white-text">Tire sua dúvida agora!</h5>
          <p class="grey-text text-lighten-4">Basta você clicar neste ícone ao lado, para iniciar uma janela de chat.
          </p>
        </div>
      </div>

    </div>

  </div>
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y');?> Grupo Bellinati
    </div>
  </div>
</footer>