<?php

include_once ('conexao.php');

$disc = $_POST['Disc'];

$result = mysqli_query($conexao, "INSERT INTO forms(disc) VALUES ('$disc')")

?>