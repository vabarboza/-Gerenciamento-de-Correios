<?php
include_once('../header.php');
include_once('../footer.php');

// wait 5 seconds and redirect :)

$parameter = $_GET['id'];
if ($parameter == 1) {
  $cidade = "Maringá!!";
} elseif ($parameter == 2) {
  $cidade = "Curitiba!!";
} elseif ($parameter == 3) {
  $cidade = "Fortaleza!!";
}


echo "<meta http-equiv=\"refresh\" content=\"5;url=duvidas/adm.php?id=$parameter\"/>";
?>

<main>
  <section>
    <div class="row">
      <div class="col s5">
        <p></p>
        <img height="230px" src="img/bots/gahag-ok2.svg">
      </div>

      <div class="col s7">
        <blockquote>
          <h6 class="black-text"><?php echo $cidade; ?></h6>
        </blockquote>

        <blockquote>
          Certo, já estou direcionando você para a área correta, aguarde só mais um pouquinho!
        </blockquote>

        <blockquote>
          Só lembrando, se tiver outra dúvida, você pode me perguntar no chat interativo.
        </blockquote>

      </div>


    </div>

    <div class="row center">
      <div class="container">

        <div class="preloader-wrapper small active">
          <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>

          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>

          <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>

          <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>