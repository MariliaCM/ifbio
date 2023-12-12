<?php
include('menu.php');

?>

<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Projetos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active">Projetos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fauna</h5>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Avifauna</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home1-tab" data-bs-toggle="tab" data-bs-target="#home1"
                        type="button" role="tab" aria-controls="home1" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video1-tab" data-bs-toggle="tab" data-bs-target="#video1"
                        type="button" role="tab" aria-controls="video1" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos1-tab" data-bs-toggle="tab" data-bs-target="#fotos1"
                        type="button" role="tab" aria-controls="fotos1" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref1-tab" data-bs-toggle="tab" data-bs-target="#ref1" type="button"
                        role="tab" aria-controls="ref1" aria-selected="false">Referências</button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                      <p style="text-align: justify;">A avifauna inclui espécies de aves de determinada região. Elas são
                        essenciais para a regeneração de área degradadas, manutenção da biodiversidade, dispersão de
                        sementes (ornitocoria),
                        polinização e uma série de benefícios com a manutenção das relações ecológicas. O levantamento
                        da avifauna
                        realizado no Instituto Federal Catarinense – Campus Camboriú visou identificar as espécies de
                        aves que usam esta área, cercada de intensa atividade antrópica, como refúgio para a sua
                        sobrevivência. As espécies de aves
                        foram levantadas através de caminhadas orientadas pelo Câmpus, por meio dos seguintes métodos:
                        observação visual, registro fotográfico, e filmográfico quando possível;
                        observação sonora dos cantos das mesmas; testemunho de membros da comunidade do Câmpus que
                        tiveram contato visual ou sonoro com alguma espécie durante suas atividades diárias.</p>
                    </div>
                    <div class="tab-pane fade" id="video1" role="tabpanel" aria-labelledby="video1-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/2OBxdSN2pV0?si=qL11znA3du2u6LWv" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="ref1" role="tabpanel" aria-labelledby="ref1-tab">
                      <p style="text-align: justify;">MARIOT, E. J.; BLASIUS, G. K.; COTA, R. S. <a
                          href="http://www.camboriu.ifc.edu.br/vfice2014/anais/uploads/trab31.pdf">Levantamento da
                          avifauna do campus do IFC - Camboriú</a>. MOSTRATEC, 2014.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Mastofauna</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home2-tab" data-bs-toggle="tab" data-bs-target="#home2"
                        type="button" role="tab" aria-controls="home2" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video2-tab" data-bs-toggle="tab" data-bs-target="#video2"
                        type="button" role="tab" aria-controls="video2" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos2-tab" data-bs-toggle="tab" data-bs-target="#fotos2"
                        type="button" role="tab" aria-controls="fotos2" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref2-tab" data-bs-toggle="tab" data-bs-target="#ref2" type="button"
                        role="tab" aria-controls="ref2" aria-selected="false">Referências</button>
                    </li>

                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                      <p style="text-align: justify;">Esse projeto visa a identificação da mastofauna silvestre nos
                        remanescentes florestais do IFC.</p>
                    </div>
                    <div class="tab-pane fade" id="video2" role="tabpanel" aria-labelledby="video2-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/2OBxdSN2pV0?si=qL11znA3du2u6LWv" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="ref2" role="tabpanel" aria-labelledby="ref2-tab">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Museu Entomológico</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home3-tab" data-bs-toggle="tab" data-bs-target="#home3"
                        type="button" role="tab" aria-controls="home3" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video3-tab" data-bs-toggle="tab" data-bs-target="#video3"
                        type="button" role="tab" aria-controls="video3" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos3-tab" data-bs-toggle="tab" data-bs-target="#fotos3"
                        type="button" role="tab" aria-controls="fotos3" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref3-tab" data-bs-toggle="tab" data-bs-target="#ref3" type="button"
                        role="tab" aria-controls="ref3" aria-selected="false">Referências</button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                      <p style="text-align: justify;">O Museu Entomológico do Instituto Federal Catarinense – Campus
                        Camboriú, traz coleções confeccionadas pelos estudantes das disciplinas de Defesa Sanitária
                        Vegetal (curso Técnico em Agropecuária) e Entomologia Geral (Bacharelado em Agronomia) com o
                        objetivo de desenvolver a habilidade em coleta e preparo de amostras de insetos para
                        identificação, capacitando o futuro profissional no reconhecimento dos principais grupos de
                        interesse agrícola.</p>
                    </div>
                    <div class="tab-pane fade" id="video3" role="tabpanel" aria-labelledby="video3-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/waFGvvdYPwM?si=_a8aycMvIfXNlPUA" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                      <br><br>
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/WBybYGw4-nA?si=FE6LwqIuPh3IuuBE" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="fotos3" role="tabpanel" aria-labelledby="fotos3-tab">
                      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="assets/img/museu/1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/museu/2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/museu/3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/museu/4.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/museu/5.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
                    </div>
                    <div class="tab-pane fade" id="ref3" role="tabpanel" aria-labelledby="ref3-tab">
                      <p style="text-align: justify;"><a
                          href="http://www.ifc-camboriu.edu.br/~wilson/DSV%20-%20Entomologia/Coleta,%20montagem%20e%20conserva%E7%E3o%20de%20insetos.pdf">Coleta,
                          montagem e conservação de insetos.</a></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Flora</h5>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Inventário florestal</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home4-tab" data-bs-toggle="tab" data-bs-target="#home4"
                        type="button" role="tab" aria-controls="home4" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video4-tab" data-bs-toggle="tab" data-bs-target="#video4"
                        type="button" role="tab" aria-controls="video4" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos4-tab" data-bs-toggle="tab" data-bs-target="#fotos4"
                        type="button" role="tab" aria-controls="fotos4" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref4-tab" data-bs-toggle="tab" data-bs-target="#ref4" type="button"
                        role="tab" aria-controls="ref4" aria-selected="false">Referências</button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                      <p style="text-align: justify;">O Inventário Florestal é essencial para acompanhamento do
                        desenvolvimento da floresta, pois é uma técnica que visa obter informações das características
                        quantitativas e qualitativas dos recursos florestais (Baia, 2017). Nesse documento aparecem
                        informações tais como: altura, diâmetro, volume, coordenadas de localização (latitude e
                        longitude) e nome da espécie. Podendo ainda ser realizado com diversas metodologias: técnicas de
                        amostragem (quando se trabalha com parte da população, ou seja, uma amostra) ou censo
                        (mensuração de todos os indivíduos da população).</p>
                    </div>
                    <div class="tab-pane fade" id="video4" role="tabpanel" aria-labelledby="video4-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/aZ4BXi2nCZQ?si=OO0PmNhOa10ZWz0M" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="ref4" role="tabpanel" aria-labelledby="ref4-tab">
                      <p style="text-align: justify;">BAIA, F. <a
                          href="https://periodicos.unipampa.edu.br/index.php/SIEPE/article/view/85459">Influência da
                          monitoria no aprendizado de inventário florestal</a>. Anais do Salão
                        Internacional de Ensino, Pesquisa e Extensão, n. 1, v. 9, 2017.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Plantas medicinais</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home5-tab" data-bs-toggle="tab" data-bs-target="#home5"
                        type="button" role="tab" aria-controls="home5" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video5-tab" data-bs-toggle="tab" data-bs-target="#video5"
                        type="button" role="tab" aria-controls="video5" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos5-tab" data-bs-toggle="tab" data-bs-target="#fotos5"
                        type="button" role="tab" aria-controls="fotos5" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref5-tab" data-bs-toggle="tab" data-bs-target="#ref5" type="button"
                        role="tab" aria-controls="ref5" aria-selected="false">Referências</button>
                    </li>

                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                      <p style="text-align: justify;">As plantas medicinais têm sido utilizadas há milhares de anos pois
                        possuem propriedades de interesse médico ou de uso industrial. No Instituto Federal Catarinense,
                        são cultivadas algumas plantas medicinais e plantas alimentícias não convencionais (PANC's),
                        principalmente por meio do projeto Relógio Medicinal.</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#basicModal1">
                        Saiba mais
                      </button>
                      <div class="modal fade" id="basicModal1" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Plantas Medicinais</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <img src="assets/img/plantas.png" class="d-block w-100" usemap="#image-map">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="video5" role="tabpanel" aria-labelledby="video5-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/ZLs-T87zmEQ?si=6um1YOy-2U_9WCPg" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="ref5" role="tabpanel" aria-labelledby="ref5-tab">
                      <p style="text-align: justify;"><a
                          href="http://www.camboriu.ifc.edu.br/wp-content/uploads/2022/04/Cartilha-do-Relo%CC%81gio-Medicinal-Oficial.pdf">Cartilha
                          Relógio Medicial.</a></p>
                    </div>
                    <div class="tab-pane fade" id="fotos5" role="tabpanel" aria-labelledby="fotos5-tab">
                      <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ervas daninhas</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home6-tab" data-bs-toggle="tab" data-bs-target="#home6"
                        type="button" role="tab" aria-controls="home6" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video6-tab" data-bs-toggle="tab" data-bs-target="#video6"
                        type="button" role="tab" aria-controls="video6" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos6-tab" data-bs-toggle="tab" data-bs-target="#fotos6"
                        type="button" role="tab" aria-controls="fotos6" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref6-tab" data-bs-toggle="tab" data-bs-target="#ref6" type="button"
                        role="tab" aria-controls="ref6" aria-selected="false">Referências</button>
                    </li>

                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                      <p style="text-align: justify;"></p>
                    </div>
                    <div class="tab-pane fade" id="video6" role="tabpanel" aria-labelledby="video6-tab">

                    </div>
                    <div class="tab-pane fade" id="ref6" role="tabpanel" aria-labelledby="ref6-tab">

                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Relógio Medicinal</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home7-tab" data-bs-toggle="tab" data-bs-target="#home7"
                        type="button" role="tab" aria-controls="home7" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video7-tab" data-bs-toggle="tab" data-bs-target="#video7"
                        type="button" role="tab" aria-controls="video7" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos7-tab" data-bs-toggle="tab" data-bs-target="#fotos7"
                        type="button" role="tab" aria-controls="fotos7" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref7-tab" data-bs-toggle="tab" data-bs-target="#ref7" type="button"
                        role="tab" aria-controls="ref7" aria-selected="false">Referências</button>
                    </li>

                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home7" role="tabpanel" aria-labelledby="home7-tab">
                      <p style="text-align: justify;">O relógio medicinal é uma organização de plantas com
                        características medicinais divididas em doze canteiros, apresentando sete metros de raio e área
                        de circulação de pessoas entre os canteiros de um metro, no interior de cada canteiro tem
                        plantas relacionadas aos órgãos ou sistemas do organismo, incluindo um canteiro com PANC
                        (Plantas Alimentícias Não Convencionais).</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#basicModal2">
                        Saiba mais
                      </button>
                      <div class="modal fade" id="basicModal2" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Relógio Medicinal</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <img src="assets/img/relogio/relogio.png" class="d-block w-100" usemap="#image-map">

                              <!-- <map name="image-map">
    <area target="" alt="" title="" href="" coords="385,383 385,3 484,11 575,53 385,384" shape="poly">
    <area target="" alt="" title="" href="" coords="384,382,576,53,659,115,715,192" shape="poly">
    <area target="" alt="" title="" href="" coords="388,385,715,195,754,290,766,385" shape="poly">
    <area target="" alt="" title="" href="" coords="387,387,767,385,755,479,715,576" shape="poly">
    <area target="" alt="" title="" href="" coords="387,387,713,577,664,643,575,713" shape="poly">
    <area target="" alt="" title="" href="" coords="385,387,575,715,491,750,385,765" shape="poly">
    <area target="" alt="" title="" href="" coords="383,389,383,766,287,755,193,715" shape="poly">
    <area target="" alt="" title="" href="" coords="381,387,191,713,110,653,54,577" shape="poly">
    <area target="" alt="" title="" href="" coords="382,385,52,575,9,483,1,385" shape="poly">
    <area target="" alt="" title="" href="" coords="377,382,-1,383,16,281,49,193" shape="poly">
    <area target="" alt="" title="" href="" coords="382,382,52,191,103,121,191,51" shape="poly">
    <area target="" alt="" title="" href="" coords="382,380,193,54,274,16,381,1" shape="poly">
  </map> -->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="tab-pane fade" id="video7" role="tabpanel" aria-labelledby="video7-tab">
                      <iframe width="360" height="200"
                        src="https://www.youtube.com/embed/ZLs-T87zmEQ?si=6um1YOy-2U_9WCPg" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="ref7" role="tabpanel" aria-labelledby="ref7-tab">
                      <p style="text-align: justify;"><a
                          href="http://www.camboriu.ifc.edu.br/wp-content/uploads/2022/04/Cartilha-do-Relo%CC%81gio-Medicinal-Oficial.pdf">Cartilha
                          Relógio Medicial.</a></p>
                    </div>
                    <div class="tab-pane fade" id="fotos7" role="tabpanel" aria-labelledby="fotos7-tab">
                      <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="assets/img/relogio/1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/relogio/2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/relogio/3.jpeg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/relogio/4.jpeg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/relogio/5.jpeg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/relogio/6.jpeg" class="d-block w-100" alt="...">
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Plantas alimentícias não convencionais</h5>

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home8-tab" data-bs-toggle="tab" data-bs-target="#home8"
                        type="button" role="tab" aria-controls="home8" aria-selected="true">Sobre</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="video8-tab" data-bs-toggle="tab" data-bs-target="#video8"
                        type="button" role="tab" aria-controls="video8" aria-selected="false">Vídeo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="fotos8-tab" data-bs-toggle="tab" data-bs-target="#fotos8"
                        type="button" role="tab" aria-controls="fotos8" aria-selected="false">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="ref8-tab" data-bs-toggle="tab" data-bs-target="#ref8" type="button"
                        role="tab" aria-controls="ref8" aria-selected="false">Referências</button>
                    </li>

                  </ul>
                  <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="home8" role="tabpanel" aria-labelledby="home8-tab">
                      <p style="text-align: justify;"></p>
                    </div>
                    <div class="tab-pane fade" id="video8" role="tabpanel" aria-labelledby="video8-tab">

                    </div>
                    <div class="tab-pane fade" id="ref8" role="tabpanel" aria-labelledby="ref8-tab">

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>
  </main><!-- End #main -->



</body>