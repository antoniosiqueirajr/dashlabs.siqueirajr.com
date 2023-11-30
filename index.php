<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dash Laboratório</title>

        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <header class="flex space-between">
            <div>SJR</div>
            <div class="text-center">Dashboard</div>
            <div class="text-right">Exemplo</div>
        </header>
        <div class="main flex flex-1"> 
            <div>
                <div class="painel text-center flex h-center v-center">
                    <i class="fa fa-2x fa-phone text-danger"></i>
                    <span class="ml-5">&nbsp;&nbsp;TELEFONE</span>
                </div>
                <div class="flex">
                    <div class="flex">
                        <div class="painel bg-success flex-1">
                            <div class="painel-titulo">Disponível</div>
                            <div class="painel-subtitulo">&nbsp;</div>
                            <div class="painel-indicador">12</div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-column">
                        <div class="flex flex-1">
                            <div class="painel flex-1">
                                <div class="painel-titulo">Na fila</div>
                                <div class="painel-subtitulo">&nbsp;</div>
                                <div class="painel-indicador">0</div>
                            </div>
                            <div class="painel flex-1">
                                <div class="painel-titulo">Em andamento</div>
                                <div class="painel-subtitulo">&nbsp;</div>
                                <div class="painel-indicador">1</div>
                            </div>
                        </div>
                        <div class="painel flex-1">
                            <div class="painel-titulo">Última chamada perdida</div>
                            <div class="painel-subtitulo">&nbsp;</div>
                            <div class="painel-indicador painel-indicador-pequeno">2 dias, 10:48:37</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="painel text-center flex h-center v-center">
                    <i class="fas fa-2x fa-comment-alt"></i>
                    <span class="ml-5">&nbsp;&nbsp;CHAT</span>
                </div>
                <div class="flex">
                    <div class="flex-1 flex flex-column">
                        <div class="flex flex-1">
                            <div class="painel flex-1">
                                <div class="painel-titulo">Total</div>
                                <div class="painel-subtitulo">Mês atual</div>
                                <div class="painel-indicador">711</div>
                            </div>
                            <div class="painel flex-1">
                                <div class="painel-titulo">Tempo médio</div>
                                <div class="painel-subtitulo">Hoje</div>
                                <div class="painel-indicador text-sucess">00:20</div>
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <div class="painel flex-1">
                                <div class="painel-titulo">% boas avaliações</div>
                                <div class="painel-subtitulo">Mês atual</div>
                                <div class="painel-indicador">90</div>
                            </div>
                            <div class="painel flex-1">
                                <div class="painel-titulo">Duração média</div>
                                <div class="painel-subtitulo">Essa semana</div>
                                <div class="painel-indicador text-warning">27:20</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="painel text-center flex h-center v-center">
                    <i class="fa fa-2x fa-envelope"></i>
                    <span class="ml-5">&nbsp;&nbsp;CASES</span>
                </div>
                <div class="flex">
                    <div class="flex-1 flex flex-column">
                        <div class="flex flex-1">
                            <div class="painel flex-1">
                                <div class="painel-titulo">CSAT Score</div>
                                <div class="painel-subtitulo">Mês atual</div>
                                <div class="painel-indicador-duplo flex">
                                    <div class="hero">
                                        <div class="hero-avatar hero-destaque">
                                            <img src="img/1.png">
                                        </div>
                                        <span class="hero-ranking hero-ranking-destaque">1</span>
                                        <div class="hero-nome">John Doe</div>
                                        <div class="hero-indice">69%</div>
                                    </div>
                                    <div class="hero">
                                        <div class="hero-avatar">
                                            <img src="img/2.png">
                                        </div>
                                        <span class="hero-ranking">2</span>
                                        <div class="hero-nome">John Doe</div>
                                        <div class="hero-indice">61%</div>
                                    </div>
                                    <div class="hero">
                                        <div class="hero-avatar">
                                            <img src="img/3.jpg">
                                        </div>
                                        <span class="hero-ranking">3</span>
                                        <div class="hero-nome">John Doe</div>
                                        <div class="hero-indice">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </body>
</html>