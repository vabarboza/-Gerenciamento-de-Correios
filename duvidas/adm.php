<?php
include_once('../header.php');
include_once('../footer.php');

$parameter = $_GET['id'];

if ($parameter == 1) {
  $fone = "08006439287";
  $wp = "4188732727";
  $email = "suporte@bellinatiperez.com.br";
} elseif ($parameter == 2) {
  $fone = "08006439287";
  $wp = "4188732727";
  $email = "suporte@bellinatiperez.com.br";
} elseif ($parameter == 3) {
  $fone = "08006439287";
  $wp = "4188732727";
  $email = "suporte@bellinatiperez.com.br";
}

?>

<main>


  <div class="fixed-action-btn">
    <a class="btn-floating btn-large bg-danger-dark">
      <i class="far fa-comments"></i>
    </a>
    <ul>
      <li><a href="tel:<?php echo $fone ?>" class="btn-floating bg-roxo"><i class="fas fa-phone-alt"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=55<?php echo $wp ?>&text=Olá,%20tenho%20uma%20duvida!" class="btn-floating green">
          <i class="fab fa-whatsapp"></i></a></li>
      <li><a href="mailto:<?php echo $email ?>?subject=Duvida" class="btn-floating bg-azul"><i class="far fa-envelope"></i></a></li>
    </ul>
  </div>

</main>



<footer class="page-footer bg-danger-dark">
  <div class="footer-copyright">
    <div class="container center-align">
      © <?php echo date('Y'); ?> Grupo Bellinati
    </div>
  </div>
</footer>