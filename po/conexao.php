<?php
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $Schemaname = 'cadastroschema';

    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $Schemaname);

    if($conexao->connect_errno){
        echo "erro";
    }
    else{
        echo "Conexão efetuada!";
    }

    //Excluir
    $sql = "delete from forms where id = '41'";
    $conexao->query($sql);


    //Atualizar
    $sql = "update forms set disc = 'História' where id='4'";
    $conexao->query($sql);


    //Inserir
    $sql = "insert into forms (disc) values ('Ciências')";
    $conexao->query($sql);

    //ler
    $sql = "select * from forms";
    $results = $conexao->query($sql);
    if ($results->num_rows){
        while($forms = $results->fetch_object()){
            echo "<br>{$forms->id} - {$forms->disc} <br>";
        }
    }else{
        echo "Nenhum registro encontrado";
    }
?>
