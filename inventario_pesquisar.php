<?php
error_reporting(0);
include('menu.php');
session_start();
include_once 'conexao.php';
if (!empty($_GET['search'])) {
  $data = $_GET['search'];
  $sql = "SELECT idinventario, nomedominio, nomereino, nomefilo, nomeclasse, nomeordem, nomefamilia, nomegenero, nomeespecie, nomeflora, latitude, longitude, altura, diametro, volume from dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join flora on idespecie=fkflora inner join inventario on idflora=fkinventario WHERE nomedominio LIKE '%$data%' or nomereino LIKE '%$data%' or nomefilo LIKE '%$data%' or nomeclasse LIKE '%$data%' or nomeordem LIKE '%$data%' or nomefamilia LIKE '%$data%' or nomegenero LIKE '%$data%' or nomeespecie LIKE '%$data%' or nomeflora LIKE '%$data%' or latitude LIKE '%$data%' or longitude LIKE '%$data%' or altura LIKE '%$data%' or diametro LIKE '%$data%' or volume LIKE '%$data%' ORDER BY idinventario ASC;";
} else {
  $sql = "SELECT idinventario, nomedominio, nomereino, nomefilo, nomeclasse, nomeordem, nomefamilia, nomegenero, nomeespecie, nomeflora, latitude, longitude, altura, diametro, volume from dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join flora on idespecie=fkflora inner join inventario on idflora=fkinventario ORDER BY idinventario ASC;";
}
$result = mysqli_query($conn, $sql);


function alerta($type, $title, $msg)
{
  echo "<script type='text/javascript'>
      Swal.fire({  
        icon: '$type',
        title: '$title',
        text: '$msg', 
        showConfirmButton: false,
        timer: 4000
      })
      </script>";
}

if ($_SESSION['msg'] == 1) {
  alerta('success', 'Ok!', 'Apagado com sucesso!');
}
if ($_SESSION['msg'] == 2) {
  alerta('success', 'Ok!', 'Alterado com sucesso!');
}
if ($_SESSION['msg'] == 3) {
  alerta('warning', 'Atenção!', 'Erro ao alterar!');
}
unset($_SESSION['msg']);
?>



<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Início</a></li>
        <li class="breadcrumb-item active">Inventário Florestal</li>
      </ol>
    </nav>
    <div class="box-search">
      <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
      <button onclick="searchData()" class="btn btn-primary">
        <i class="bi bi-search"></i>
      </button>
    </div>

  </div>

  <style>
    .box-search {
      display: flex;
      justify-content: left;
      gap: .1%;
    }
  </style>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <table class="table datatable">
          <thead>
            <tr>
              <!-- <th scope="col">#</th> -->
              <th scope="col">Taxonomia</th>
              <th scope="col">Nome popular</th>
              <th scope="col">Latitude</th>
              <th scope="col">Longitude</th>
              <th scope="col">Altura(m)</th>
              <th scope="col">Diâmetro(cm)</th>
              <th scope="col">Volume(cm3)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $user_data['nomedominio'] . "<br>" . $user_data['nomereino'] . "<br>" . $user_data['nomefilo'] . "<br>" . $user_data['nomeclasse'] . "<br>" . $user_data['nomeordem'] . "<br>" . $user_data['nomefamilia'] . "<br>" . $user_data['nomegenero'] . "<br>" . $user_data['nomeespecie'] . "</td>";
              echo "<td>" . $user_data['nomeflora'] . "</td>";
              echo "<td>" . $user_data['latitude'] . "</td>";
              echo "<td>" . $user_data['longitude'] . "</td>";
              echo "<td>" . $user_data['altura'] . "</td>";
              echo "<td>" . $user_data['diametro'] . "</td>";
              echo "<td>" . $user_data['volume'] . "</td>";

              if (!empty($_SESSION['id'])) {
                echo "<td>
                        <a class='btn btn-sm btn-primary' href='inventario_edit.php?idinventario=$user_data[idinventario]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='inventario_del.php?idinventario=$user_data[idinventario]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                echo "</tr>";
              } else {

              }

            }
            ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

        <!-- </div>
        </div> -->

      </div>
    </div>
  </section>

</main><!-- End #main -->
<script>
  var search = document.getElementById('pesquisar');

  search.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
      searchData();
    }
  });

  function searchData() {
    window.location = 'inventario_pesquisar.php?search=' + search.value;
  }
</script>