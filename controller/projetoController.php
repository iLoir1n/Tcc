<?php
$pontuacao = 0;
// Recebe as respostas do formulário
// $resposta1 = isset($_POST['question1']) ? $_POST['question1'] : 0;
// $resposta2 = isset($_POST['question2']) ? $_POST['question2'] : 0;
// $resposta3 = isset($_POST['question3']) ? $_POST['question3'] : 0;
// $resposta4 = isset($_POST['question4']) ? $_POST['question4'] : 0;
// $resposta5 = isset($_POST['question5']) ? $_POST['question5'] : 0;
// // Soma as respostas
// $pontuacao = $resposta1 + $resposta2 + $resposta3 + $resposta4 + $resposta5;
// echo "<pre>";
// var_dump($_POST);
// echo "<pre/>";

foreach ($_POST as $key => $value) {
    if($_POST['quemESelect'] == 'jogador'){

        if(strpos($key,'jogador_question') !== false){
            $pontuacao += $value ;
        }

    }elseif ($_POST['quemESelect'] == 'amigo_jogador') {

        if(strpos($key,'amigo_question') !== false){
            $pontuacao += $value ;
        }
    }else{
        header('location: ../projeto.php');
        exit();
    }
}

session_start();
$_SESSION['pontuacao'] = $pontuacao;

header('location: ../projeto.php');
exit();
?>
