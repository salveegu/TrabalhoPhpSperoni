<?php
include ('cabecalho.html');
include ('dados.php');
?>
<main class="container">
    <h2>Curso</h2>
    <?php
    //exibe o conteúdo do Array $_GET
    print_r($_GET);
    //recuperamos o valor da posição id

    $id = $_GET['id'];

    //buscamos os dados do professor com aquele id

    $curso = getCurso($id);
    //exibindo o conteúdo do array $professor
    print_r($curso);
?>
</main>

<?php
include ('rodape.html');
?>
