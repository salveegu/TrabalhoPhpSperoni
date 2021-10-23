<?php
  include('cabecalho.html');
  include('dados.php');
?>
  <main>
      <h2>Lista dos Cursos</h2>
      <table>
          <thead>
              <th>Id</th>
              <th>Nome</th>
              <th>Semestres</th>
          </thead>
          <tbody>
              <!-- Aqui vão as linhas com os dados -->

              <?php
                 $cursos = getCursos();
                 print_r($cursos);
              ?>

          </tbody>
      </table>
  </main>
<?php
  include('rodape.html');
?>
