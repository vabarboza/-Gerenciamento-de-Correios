<?php
include_once('../header.php');
include_once('../footer.php');

$parameter = $_GET['id'];

if ($parameter == 1) {
  $fone = "4421039291";
  $wp = "4188732727";
  $email = "simone.delorenzo@bellinatiperez.com.br";
} elseif ($parameter == 2) {
  $fone = "4421039291";
  $wp = "4188732727";
  $email = "simone.delorenzo@bellinatiperez.com.br";
} elseif ($parameter == 3) {
  $fone = "4421039291";
  $wp = "4188732727";
  $email = "simone.delorenzo@bellinatiperez.com.br";
}

?>

<main>
<!--
  <div class="container">

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">13° Salário</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quais as datas que são pagas o 13° Salário?
            </div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Como eu calculo o meu 13° Salário?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> O calculo do 13° é efetuado da seguinte forma: “tempo de
                trabalho” x “salario” ÷ “meses trabalhados no ano”.<br><br>
                Ainda com duvida? Entre em contato</span></div>

          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quais os descontos no 13° Salário?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> O décimo terceiro desconta INSS de acordo com a tabela de
                contribuição mensal e, dependendo da faixa salarial, há imposto sobre décimo terceiro também.<br><br>
                O desconto do INSS pode ser de 8%, 9% ou 11% sobre o salário bruto ou proporcional aos meses trabalhados,
                de acordo com a faixa salarial.<br><br>
                Neste caso, o desconto do INSS é efetuado somente na segunda parcela.
              </span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Banco de Horas</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Qualquer minuto
                que não for lançado via chamado pra banco de
                horas, é descontado em folha.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Carteira de Trabalho</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Contas Digitais</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Crachá</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A cada quanto tempo eu troco de cordão de
              crachá?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Caso eu perca meu crachá, exista algum custo
              para solicitar um novo?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>O que devo fazer com meu crachá, quando sair
              da empresa?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Feriados</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Férias</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Com quanto tempo antes das férias, eu posso
              solicitar a troca da data de inicio das férias?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Posso dividir minhas férias? Ou devo tirar
              ela por completo?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Recebo alguma coisa quando saio de férias?
            </div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Folha de Pagamento</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Maternidade</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Odontologia</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A empresa tem algum plano odontológico?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Qual o valor do plano odontológico? Existe
              algum tipo de carência para poder utiliza-lo?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quais tipos de procedimento o plano
              odontológico cobre?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Recisão</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">RV</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Saúde</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>
    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Treinamento</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>
    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Vale Refeição</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>
    <div class="divider"></div>

    <div class="collection wow fadeInUp">

      <a class="collection-item active bg-danger-dark" style="font-weight: bold; color: white;">Vale Transporte</a>
      <a class="collection-item bg-branco">
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Quanto tempo eu tenho para
              solicitar desconto em banco de horas?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>A partir de quantas horas
              negativas não lançadas para banco de horas passa-se a descontar em folha?</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span><i class="far fa-comment text-danger-dark"></i> Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header" style="color: black;"><i class="far fa-question-circle hvr-push text-danger-dark"></i>Third</div>
            <div class="collapsible-body bg-branco" style="color: black;"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>
      </a>

    </div>

  </div>
-->

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large bg-danger-dark">
      <i class="far fa-comments"></i>
    </a>
    <ul>
      <li><a href="tel:<?php echo $fone ?>" class="btn-floating bg-roxo"><i class="fas fa-phone-alt"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=55<?php echo $wp ?>&text=Olá,%20tenho%20uma%20duvida!" class="btn-floating green"><i class="fab fa-whatsapp"></i></a></li>
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