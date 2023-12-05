<?php
session_start();


$perguntas['jogador'] = [
    [
        'question' => "Você se sente estressado quando joga jogos online?",
        'resp_1' => "Não,eu nao me estresso.",
        'resp_2' => "Sim eu me estresso, porém eu me controlo.",
        'resp_3' => "Sim eu me estresso, e não consigo me controlar."
    ],
    [
        'question' => "O resultado final de uma partida pode influenciar em seu emocional?",
        'resp_1' => "Não,isso não afeta em nada em meu emocional.",
        'resp_2' => "As vezes, depende muito.",
        'resp_3' => "Sim, acaba influenciando sobre meu emocional."
    ],
    [
        'question' => "Como você reage quando perde ou comete erros durante no jogo?",
        'resp_1' => "Procuro aprender com meus próprios erros.",
        'resp_2' => "Me estresso, porém não influencia no meu dia.",
        'resp_3' => "Me estresso muito ao ponto de mudar meu humor."
    ],
    [
        'question' => "Você costuma ser rude ou desrespeitoso com outros jogadores após perder uma partida?",
        'resp_1' => "Não,eu não faço isso.",
        'resp_2' => "Depende de como o adversário me tratar.",
        'resp_3' => "Sim, não aceito perder uma partida então desconto em outros jogadores."
    ],
    [
        'question' => "De 0 a 10 com que frequência você critica ou insulta outros jogadores durante o jogo?",
        'resp_1' => "0 a 3=nunca.",
        'resp_2' => "4 a 6=às vezes.",
        'resp_3' => "7 a 10=sempre."
    ],
    [
        'question' => "Você costuma usar palavras de baixo escalão(xingamento)?",
        'resp_1' => "Não, eu tento evitar esse tipo de linguagem.",
        'resp_2' => "As vezes sem querer acaba saindo no calor do momento.",
        'resp_3' => "Sim, não vejo problema no uso de tais palavras."
    ],
    [
        'question' => "Você já ameaçou outros jogadores durante o jogo?",
        'resp_1' => "Não, nunca cheguei a esse ponto.",
        'resp_2' => "Já aconteceu, mas eu vi que errei e pedi desculpas.",
        'resp_3' => "Sim, eu não ligo de fazer isso pois a pessoa nem me conhece de verdade."
    ],
    [
        'question' => "Você costuma culpa outros jogadores por suas próprias falhas no jogo?",
        'resp_1' => "Não, nunca fiz isso.",
        'resp_2' => "As vezes, depende da situação durante o jogo.",
        'resp_3' => "Sim, eu me acho certo sempre."
    ],
    [
        'question' => "Como você se sentiria se fosse banido de um jogo online?",
        'resp_1' => "Reconheceria que eu fiz algo de errado para receber essa punição.",
        'resp_2' => "Irritado e estressado mas buscaria reconhecer que o erro possa ter sido meu.",
        'resp_3' => "Frustação, raiva, ódio, indignado."
    ],
    [
        'question' => "Você ja cometeu Racismo, Assédios, Homofobia ou qualquer outro tipo de preconceito em uma partida?",
        'resp_1' => "Não, nunca.",
        'resp_2' => "Já sim, mas me arrependi e fui pedir desculpas.",
        'resp_3' => "Sim, cometi e não me arrependo disso."
    ]
];

$perguntas['amigo_jogador'] = [
    [
        'question' => "Como a pessoa que joga fica quando estar jogando jogos eletrônicos?",
        'resp_1' => "Não se estressa.",
        'resp_2' => "Se estressa, porém, se controla.",
        'resp_3' => "Se estressa."
    ],
    [
        'question' => "O resultado final da partida influência no emocional dessa pessoa?",
        'resp_1' => "Não.",
        'resp_2' => "Às vezes.",
        'resp_3' => "Não."
    ],
    [
        'question' => "Como essa pessoa reage quando perde ou comete erros no jogo?",
        'resp_1' => "Procura aprender com seus próprios erros.",
        'resp_2' => "Se estressa porém vejo que não influencia no dia dela.",
        'resp_3' => "Se estressa muito ao ponto de eu ver ela mudar de humor."
    ],
    [
        'question' => "Essa pessoa costuma ser rude ou desrespeitoso com outros jogadores após perder uma partida?",
        'resp_1' => "Não.",
        'resp_2' => "Depende de como o adversário trata ela.",
        'resp_3' => "Sim."
    ],
    [
        'question' => "De 0 a 10 como você ver essa pessoa criticando ou insultando outros jogadores durante o jogo?",
        'resp_1' => "0 a 3=nunca.",
        'resp_2' => "4 a 6=às vezes.",
        'resp_3' => "7 a 10=sempre."
    ],
    [
        'question' => "Essa pessoa costuma culpar outros jogadores por suas próprias falhas no jogo?",
        'resp_1' => "Não.",
        'resp_2' => "Às vezes.",
        'resp_3' => "Sempre."
    ],
    [
        'question' => "Essa pessoa costuma usar palavras de baixo escalão (xingamentos)?",
        'resp_1' => "Não, eu notei que ela evita esse tipo de linguagem.",
        'resp_2' => "Às vezes noto que sem querer no calor do momento ela costuma fazer isso.",
        'resp_3' => "Sim, ela usa palavras de baixo escalão sempre."
    ],
    [
        'question' => "Essa pessoa já ameaçou outros jogadores durante o jogo?",
        'resp_1' => "Não, nunca a vi chegar a esse ponto.",
        'resp_2' => "Já aconteceu, mas notei que ela viu que errou e foi pedir desculpas.",
        'resp_3' => "Sim, ela sempre se impoe nos jogos assim e não ligo para as consequências."
    ],
    [
        'question' => "Essa pessoa já cometeu Racismo, Assédios, Homofobia ou qualquer outro tipo de preconceito em uma partida?",
        'resp_1' => "Não, nunca.",
        'resp_2' => "Já sim, mas elase arrependeu e foi pedir desculpas.",
        'resp_3' => "Sim, cometeu e não se arrependeu disso."
    ],
    [
        'question' => "Como você acha essa pessoa se sentiria se fosse banida de um jogo online?",
        'resp_1' => "Reconheceria que fez algo de errado para receber essa punição.",
        'resp_2' => "Irritada e estressada mas buscaria reconhecer que o erro possa ter sido dela.",
        'resp_3' => "Frustação, raiva, ódio, indignada."
    ]

];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JL Community - O que é Toxidade </title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<style>
    #h4_text {
        font-size: 25px;
        margin: -30px 0 0px;
        color: #444;
        text-align: center;
    }

    #h4_text_2 {
        font-size: 17px;
        margin: 5px 0 10px;
        color: #444;
    }

    #h4_text_3 {
        font-size: 17px;
        margin: -30px 0 0px;
        color: #444;
    }
</style>

<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <a class="navbar-brand texto_imagem" href="index.html">
                    <img id="logo" src="img/logo2.png" alt="JL Community"> JL Community
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end nav-pills " id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="index.html">Home</span></a>
                        <a class="nav-item nav-link" id="about-menu" href="toxidade.html">O que é toxicidade</a>
                        <a class="nav-item nav-link" id="services-menu" href="projeto.php">Projeto</a>
                        <a class="nav-item nav-link" id="team-menu" href="faq.html">FAQ</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="test-container">
        <form id="controller" action="controller/projetoController.php" method="POST">
            <div class="col-12">
                <h4 class="main-title">Quiz sobre Toxicidade<br></h4>
                <h3 id="h4_text">Faça o teste e descubra se você ou algum conhecido apresenta um indício de toxicidade em jogos.</h3><br>
                <h3 id="h4_text_2">OBSERVAÇÕES GERAIS:</h3>
                <p id="h4_text_2">1) Serão no total 10 perguntas.</p><br>
                <p id="h4_text_3">2) As 10 questões você pode obter uma pontuação de 0 a 20 sendo:</p>
                <li style="color:orangered"><b>0 a 6:</b> nível baixo ou nenhum de toxicidade.</i>
                <li style="color:orangered"><b>7 a 14:</b> nível médio de toxicidade.</i>
                <li style="color:orangered"><b>15 a 20:</b> nível alto de toxicidade.</i><br>
                <p id="h4_text_2">3) O resultado final não é um laudo médico e sim uma base para você reconhecer a você mesmo.</p><br>
                <p id="h4_text_2"><u>BOM TESTE!</u>😉</p><br>
            </div>

            <?php if (!isset($_SESSION['pontuacao'])) { ?>
                <div id="quemE">
                    Para quem é esse teste:
                    <select name="quemESelect" id="quemESelect">
                        <option value="">selecionar</option>
                        <option value="jogador">Para um jogador</option>
                        <option value="amigo_jogador">Para um amigo(a) do jogador</option>
                    </select>
                </div>
                <div id="jogador" style="display: none;">
                    <?php foreach ($perguntas['jogador'] as $key => $value) {
                        $index = $key + 1; ?>
                        <div id="question-1" class="questions">
                            <h2 class="test_sub">Questão <?= $index ?></h2>
                            <p><?= $value['question'] ?></p>
                            </br>
                            <p>
                                <input type="radio" name="jogador_question<?= $index ?>" value="0">
                                <strong>A)</strong> <?= $value['resp_1'] ?>
                            </p>
                            <p>
                                <input type="radio" name="jogador_question<?= $index ?>" value="1">
                                <strong>B)</strong> <?= $value['resp_2'] ?>
                            </p>
                            <p>
                                <input type="radio" name="jogador_question<?= $index ?>" value="2">
                                <strong>C)</strong> <?= $value['resp_3'] ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>

                <div id="amigo_jogador" style="display: none;">
                    <?php foreach ($perguntas['amigo_jogador'] as $key => $value) {
                        $index = $key + 1; ?>
                        <div id="question-1" class="questions">
                            <h2 class="test_sub">Questão <?= $index ?></h2>
                            <p><?= $value['question'] ?></p>
                            </br>
                            <p>
                                <input type="radio" name="amigo_question<?= $index ?>" value="0">
                                <strong>A)</strong> <?= $value['resp_1'] ?>
                            </p>
                            <p>
                                <input type="radio" name="amigo_question<?= $index ?>" value="1">
                                <strong>B)</strong> <?= $value['resp_2'] ?>
                            </p>
                            <p>
                                <input type="radio" name="amigo_question<?= $index ?>" value="2">
                                <strong>C)</strong> <?= $value['resp_3'] ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>

                <br>

                <input type="submit" name="submit" id="submit" value="Enviar respostas">

            <?php

            } else {

                echo "<h3>__________________________________________<h3>";
                echo "<h2>Obrigado por responder a pesquisa!</h2>";

                if ($_SESSION['pontuacao'] < 7) {
                    echo "<p id='pontuacao'>Você obteve uma pontuação de: " .  $_SESSION['pontuacao'] . " pontos</p>";
                    echo "Conforme essa nota, foi considerado com um nível baixo de toxicidade!<br>
                    Parabéns por ter essa boa conduta, dessa forma a comunidade gamer crescerá de forma saudável.";
                } else if ($_SESSION['pontuacao'] < 15) {
                    echo "<p id='pontuacao'>Você obteve uma pontuação de: " .  $_SESSION['pontuacao'] . " pontos</p>";
                    echo "Conforme essa nota ,foi considerado com um nível médio de toxicidade!<br><br>
                    Ter uma conduta BOA apenas às vezes pode prejudicar a sí mesmo e ao próximo, tome cuidado para isso não sair da linha.<br>
                    Mesmo que não tenha recebido a nota de nível alto de toxicidade, gostariamos que olhasse nossa página que falamos sobre toxicidade<br>
                    e apartir dela tivesse uma base maior para que consiga abaixar o nível de toxicidade um dia.<a href='toxidade.html' >Clique aqui e veja!</a>";
                } else {
                    echo "<p id='pontuacao'>Você obteve uma pontuação de: " .  $_SESSION['pontuacao'] . " pontos</p>";
                    echo "Infelizmente conforme essa nota, foi considerado com um nível alto de toxicidade!<br><br>
                    Considerado uma pessoa tóxica,está de forma negativa afetando a própria vida e a do próximo.<br>
                    Se com essa nota sente que deveria mudar sua conduta, temos um guia importante para mostrar como melhorar.<a href='toxidade.html'>Clique aqui e veja você mesmo!</a>";
                }

                // remove a pontuação da variável de sessão para que não seja exibida novamente
                unset($_SESSION['pontuacao']);
            } ?>
    </div>

    </form>
    <!-- Rodapé -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-tile">Venha tomar um café:</span> Rua Luiz Dinis - 102</p>
                        <p><span class="contact-tile">Horários:</span> 9:00 - 18:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> JlCommunity@hotmail.com</p>
                        <p><span class="contact-tile">Discord: </span><a id="text-sem-decoracao" href="https://discord.gg/YwXVQXpN">Clique Aqui</a></p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Telefone de Contato:</span> (22)3864-0000</p>
                        <p><span class="contact-tile">Whatsapp:</span> (22)98847-2149</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                            <input type="submit" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="#" target="_blank">JL Community</a> &copy; 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script De Escolha Entre Pai e Player-->
    <script src="./toxidade.js"></script>
    <script src="/script.js"></script>
</body>

</html>