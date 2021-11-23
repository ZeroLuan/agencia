<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="imagens/logo_icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Fourtech</title>

</head>

<body>

    <!-- NAV -->

    <header class="container">

        <nav class="menu_principal">

            <div class="logo">

                <a><img src="imagens/logo.png" alt="logo da Fourtech"></a>

            </div>

            <div id="menu" class="opcoes_menu">

                <ul id="lista" class="lista show close">

                    <li onclick="home()">Home</li>
                    <li onclick="sobre()">Sobre</li>
                    <li onclick="oqf()">O que fazemos?</li>
                    <li onclick="portifolio()">Portifólio</li>
                    <li onclick="contato()">Contato</li>

                </ul>

                <div class="icones_geral">

                    <a target="_blank" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://github.com/"><i class="fab fa-github"></i></a> 

                </div>

                <!-- MENU MOBILE -->

                <div class="mobile_menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>

                <!-- MENU MOBILE -->

            </div>

        </nav>

    </header>

    <!-- FIM NAV -->

    <!-- HOME -->

    <section class="home_principal">

        <div class="corpo_home">
            @foreach($site_banner as $banner)
            <div class="texto_home">

                <h1>{{$banner->texto_banner}}</h1>

            </div>
            <div class="img_home">

                <img src="{{asset($banner->imagem)}}" alt="ilustração de dispositivos">

            </div>
            @endforeach
        </div>

    </section>

    <!-- FIM HOME -->

    <!-- SOBRE -->

    <section class="sobre">

        <div class="titulo_sobre">

            <h2>SOBRE</h2>

        </div>

        <div class="corpo_sobre">

            <div class="img_sobre">

                <img src="imagens/img_sobre.png" alt="ilustração de homem usando seis monitores">

            </div>

            <div class="texto_sobre">

                <ul>

                    <li>FourTech é uma agência de desenvolvimento web fundada em 2021. Atualmente desenvolve projetos bem planejados e codificados.</li>

                    <li>Nossa empresa está sempre se atualizando e procurando novas tecnologias que possam ajudar os usuários.</li>

                    <li>Nossos funcionários são bem qualificados e entregam o serviço proposto sempre priorizando a qualidade final do produto.</li>

                </ul>

            </div>

        </div>

    </section>

    <!-- FIM SOBRE -->

    <!-- O QUE FAZEMOS 'oqf = o que fazemos'-->

    <section class="o_oqf">

        <div class="corpo_oqf">

            <div class="titulo_oqf">

                <h2>O que fazemos?</h2>

            </div>
           @foreach($site_servicos as $servico)
           @if(($servico->id % 2) == 0)
            <div class="parte_01">

                <div class="img_oqf_01">

                    <img src="{{asset($servico->imagem)}}" alt="ilustração de uma mulher sentada em um notebook">

                </div>

                <div class="texto_oqf_01">

                    <h3>{{$servico->titulo}}</h3>

                    <ul>
                    @foreach($servico->itens()->get() as $item)

                        <li>{{$item->descricao}}</li>

                    @endforeach
                    </ul>

                </div>

            </div>
            @else

            <div class="parte_01">
                <div class="texto_oqf_01">

                    <h3>{{$servico->titulo}}</h3>

                    <ul>

                       @foreach($servico->itens()->get() as $item)

                            <li>{{$item->descricao}}</li>
                        
                        @endforeach

                    </ul>

                </div>
                 <div class="img_oqf_01">

                    <img src="{{asset($servico->imagem)}}" alt="ilustração de uma mulher sentada em um notebook">

                </div>

            </div>

            @endif
            @endforeach
            <!--
            <div class="parte_02">

                <div class="img_oqf_02">

                    <img src="imagens/img_oquefazemos2.png" alt="ilustração de uma mulher mexendo em um celular">

                </div>

                <div class="texto_oqf_02">

                    <h3>Mais do que fazemos:</h3>

                    <ul>

                        <li>Prestar serviços como de criação e atualização de websites;</li>

                        <li>Criação de microsites;</li>

                        <li>Gerenciamento de projetos;</li>

                        <li>Banner advertising.</li>

                    </ul>

                </div>

            </div>
                -->
        </div>

    </section>

    <!-- FIM O QUE FAZEMOS -->

    <!-- PORTIFÓLIO -->

    <section class="portifolio">

        <div class="corpo_portifolio">

            <div class="titulo_portifolio">

                <h2>Portifólio</h2>

            </div>

            <div class="texto_portifolio">

                <p>Projetos já realizados por nós:</p>

            </div>

            <div class="projetos">

                <div class="projetos_portifolio">

                    <div class="img-btn">

                        <img src="imagens/portifolio.jpg" alt="">

                        <div class="tipo_01">
                            <button class="btn">VER PROJETO</button>
                        </div>

                    </div>

                    <div class="img-btn">

                        <img src="imagens/portifolio.jpg" alt="">

                        <div class="tipo_02">
                            <button class="btn">VER PROJETO</button>
                        </div>

                    </div>

                    <div class="img-btn">

                        <img src="imagens/portifolio.jpg" alt="">

                        <div class="tipo_03">
                            <button class="btn">VER PROJETO</button>
                        </div>

                    </div>

                    <div class="img-btn">

                        <img src="imagens/portifolio.jpg" alt="">

                        <div class="tipo_04">
                            <button class="btn">VER PROJETO</button>
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- FIM PORTIFÓLIO -->

    <!-- CONTATO -->

    <section class="contato">

        <div class="corpo_contato">

            <div class="titulo_contato">

                <h2>Contato</h2>

            </div>

            <div class="contato_wrapper">

                <form action="post">

                    <input type="text" name="nome" placeholder="Nome:">
                    <input type="email" name="email" placeholder="E-mail:">

                    <textarea placeholder="Como podemos te ajudar?" name="mensagem" cols="25" rows="6"></textarea>

                    <button class="btn-tabela" type="submit">Enviar</button>

                </form>

                <div class="mapa">

                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?width=520&height=400&hl=en&q=Av.%20Tancredo%20Neves,%20000%20Salvador+(Fourtech)&t=&z=16&ie=UTF8&iwloc=B&output=embed"> </iframe>

                    <script src='https://embedmaps.com/google-maps-authorization/script.js?id=AIzaSyD1X7X7U0rI9R0mPAEhrd9NdvJncqDlX_o'> </script>

                </div>

            </div>

        </div>

    </section>

    <!-- FIM CONTATO -->

    <!-- FOOTER -->

    <footer class="footer">

        <div class="container_footer">

            <div class="item-left">

                <h2>Nosso endereço:</h2>

                <h3>Venha nos visitar!</h3>

                <p>Rua João e Maria 123/456</p>
                <p>Av. Tancredo Neves, 000, Salvador-BA</p>

            </div>

            <div class="img_footer">

                <a><img src="imagens/logo.png" alt="logo da Fourtech"></a>

            </div>

            <div class="item-right">

                <h2>Entre em contato conosco:</h2>

                <p>(74) 1234-56789</p>
                <p>(74) 1234-56789</p>
                <p>(74) 1234-56789</p>

            </div>

        </div>

        <div class="copyright">

            <p>&copy; 2021 Fourtech. Todos os direitos reservados.</p>

        </div>

    </footer>

    <!-- FIM DO FOOTER -->

    <!-- BOTÃO VOLTAR AO TOPO -->

    <div onclick="scrollTopo()" class="scrollButton">

        <i class="fas fa-angle-double-up"></i>

    </div>

    <!-- FIM BOTÃO VOLTAR AO TOPO -->

    <!-- SCRIPTS -->

    <script src="{{asset('js/animacoes.js')}}"></script>

    <script src="{{asset('js/scroll.js')}}"></script>

    <script src="js/topo.js"></script>

    <script src="{{asset('js/mobilenavbar.js')}}"></script>

    <!-- FIM DOS SCRIPTS -->

</body>

</html>