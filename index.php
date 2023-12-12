<?php
session_start();
include("menu.php");
error_reporting(0);

function alerta($type, $title, $msg)
{
  echo "<script type='text/javascript'>
			Swal.fire({
			  icon: '$type',
			  title: '$title',
			  text: '$msg',			  
			  showConfirmButton: false,
			  timer: 4000
			});
			</script>";
}

if ($_SESSION['msg_login'] == 3) {
  alerta('success', 'Bem vindo(a)!', 'Acesso autorizado!');
}
unset($_SESSION['msg_login']);
?>

<body>

  <main id="main" class="main">

    <div class="row align-items-top">
      <div class="col-lg-5">

        <!-- Card with an image on top -->
        <div class="card">
          <img src="assets/img/ifc.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">IFBio</h5>
            <p style="text-align: justify;" class="card-text">Aqui estão reunidos os dados dos projetos relacionados à
              fauna e à flora do Instituto Federal Catarinense do Câmpus Camboriú.</p>
          </div>
        </div><!-- End Card with an image on top -->

        <!-- Card with an image on bottom -->
        <div class="card">
          <iframe src="https://www.youtube.com/embed/LSVS59db9Tk?si=1j7vuc4L4dSiLl99" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <div class="card-body">
            <br>
            <p style="text-align: justify;" class="card-text">O IFC Camboriú oferece cursos de qualificação
              profissional, técnicos de nível médio, pós-médio (subsequente), educação de jovens e adultos (Proeja),
              graduação e pós-graduação (lato e stricto sensu). A Lei nº 11.892/2008 foi a responsável por instituir, no
              âmbito do sistema federal
              de ensino, a Rede Federal de Educação Profissional, Científica e Tecnológica, vinculada ao
              Ministério da Educação. Porém, historicamente, o Instituto Federal Catarinense já existia
              desde 08 de abril de 1953, sob o nome de Colégio Agrícola de Camboriú (CAC).</p>
          </div>
        </div><!-- End Card with an image on bottom -->

      </div>
      <div class="col-lg-7">

        <!-- Card with an image on top -->
        <div class="card">
          <div class="card-body">
            <br>
            <p style="text-align: justify;" class="card-text">O estado de Santa Catarina, está inserido no Bioma Mata
              Atlântica, o qual
              é constituído originalmente por diversas formações vegetais (Floresta Ombrófila Densa;
              Floresta Ombrófila Mista, também denominada de Mata de Araucárias; Floresta Ombrófila
              Aberta; Floresta Estacional Semidecidual; e Floresta Estacional Decidual), bem como os
              manguezais, as vegetações de restingas, campos de altitude, brejos interioranos e encraves
              florestais do Nordeste, como descreve a Lei nº 11.428/2006, a qual dispõe sobre utilização
              e proteção da vegetação nativa do Bioma Mata Atlântica.</p>
          </div>
        </div><!-- End Card with an image on top -->

        <!-- Card with an image on bottom -->
        <div class="card">
          <div class="card-body">
            <br>
            <p style="text-align: justify;" class="card-text">Em virtude de sua riqueza biológica e níveis de ameaça, a
              Mata Atlântica é apontada
              como um dos hotspots mundiais, ou seja, uma das prioridades para a conservação de
              biodiversidade em todo o mundo. É também considerada pela Constituição Federal como patrimônio nacional.
              Além disso, é decretada
              pela Unesco como Reserva da Biosfera.</p>
          </div>
        </div><!-- End Card with an image on bottom -->

        <div class="card">
          <div class="card-body">
            <br>
            <p style="text-align: justify;" class="card-text">No IFC Camboriú, ocorrem inúmeros projetos sobre fauna
              (avifauna,
              mastofauna, museu entomológico) e flora (inventário florestal, ervas
              daninhas, plantas medicinais, relógio medicinal, PANC’s - plantas alimentícias
              não convencionais).</p>
            <p style="text-align: justify;" class="card-text">
              Para facilitar o estudo dos seres vivos, eles são classificados hierarquicamente
              por meio do sistema taxonômico, desenvolvido pelo naturalista sueco Carlos Lineu no
              século XVIII, com uma nomenclatura binomial única para cada espécie. Logo, a taxonomia
              é uma forma de classificar hierarquicamente os seres vivos, iniciando com o Domínio, grupo
              mais geral, seguido por Reino, Filo, Classe, Ordem, Família, Gênero e Espécie.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal1">
              Saiba mais
            </button>
            <div class="modal fade" id="basicModal1" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Taxonomia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="assets/img/taxonomia.png" class="d-block w-100" usemap="#image-map">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- End Card with an image on bottom -->

      </div>
    </div>
  </main>
</body>