<?php
include_once 'header.php';
include_once 'navbar.php';
include_once 'footer.php';

include_once 'include/contador.php'
?>
<div class="container border rounded bg-branco">

  <div class="container">

    <div class="row">
      <div class="col-md-3">

        <div class="row">
          <div class="col mb-3 mt-3">
            <!-- Card -->
            <div class="card primary-color bg-azul white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $NUMEROBANCO; ?></p>
                  <p class="mb-0">Bancos Parceiros</p>
                </div>
                <div>
                  <i class="fas fa-university fa-3x text-black-40"></i>
                </div>
              </div>
              <a href="pages/bancos/lista.php"
                class="card-footer footer-hover small text-center white-text border-0 p-2">Mais Informações<i
                  class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
            <!-- Card -->
          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <!-- Card -->
            <div class="card warning-color bg-laranja white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $NUMEROVAREJO; ?></p>
                  <p class="mb-0">Varejistas Parceiros</p>
                </div>
                <div>
                  <i class="fas fa-shopping-cart fa-3x text-black-40"></i>
                </div>
              </div>
              <a href="pages/varejos/lista.php"
                class="card-footer footer-hover small text-center white-text border-0 p-2">Mais Informações<i
                  class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
            <!-- Card -->
          </div>
        </div>

        <div class="row">
          <div class="col mb-4">
            <!-- Card -->
            <div class="card bg-roxo accent-2 white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0"><?php echo $CONVENIOS; ?></p>
                  <p class="mb-0">Empresas Conveniadas</p>
                </div>
                <div>
                  <i class="fas fa-handshake fa-3x text-black-40"></i>
                </div>
              </div>
              <a href="pages/convenios/lista.php"
                class="card-footer footer-hover small text-center white-text border-0 p-2">Mais Informações<i
                  class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
            <!-- Card -->
          </div>
        </div>

      </div>


      <div class="col mt-3">

        <div class="row">
          <div class="col mb-3">

            <?php while ($dado = $NOTICIAS->fetch_array()) { ?>
            <!-- Card -->
            <div class="card bg-info accent-2  white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0">Noticias</p>
                  <p class="mb-0"><?php echo $dado['texto']; ?></p>
                </div>
                <div>
                  <i class="far fa-comments fa-3x"></i>
                </div>
              </div>
              <a class="card-footer footer-hover small text-left white-text border-0 p-2">
                &nbsp;<i class="far fa-clock"></i>&nbsp; <?php echo date('d/m/Y ', strtotime($dado['data'])); ?></a>
            </div>
            <!-- Card -->
            <?php } ?>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>