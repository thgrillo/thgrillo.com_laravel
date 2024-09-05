@extends('layouts.main')


@section('content')
    <!-- Slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                @if ($sectionOne)
                                    <span data-animation="fadeInUp" data-delay=".4s">{{ $sectionOne->span }}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">{{ $sectionOne->firstText }}</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">{{ $sectionOne->secondText }}</p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn radius-btn">{{ $sectionOne->button }}</a>
                                        <!-- Video Btn -->
                                        <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="assets/img/hero/hero_right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Best Features Start -->
    <section class="best-features-area section-padd4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>Alguns serviços que irão te fazer voar na internet</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Design Responsivo</h3>
                                    <p>Adaptado para todos os dispositivos: desktop, tablet e celular.</p>
                                </div>
                            </div>
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>SEO</h3>
                                    <p>Melhoria de visibilidade em buscadores com otimizações iniciais essenciais.</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Integração Social</h3>
                                    <p>Conexão direta com redes sociais para aumentar engajamento.</p>
                                </div>
                            </div>
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Painel Administrativo</h3>
                                    <p>Gerenciamento fácil de conteúdos com painel intuitivo e acessível.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shpe -->
        <div class="features-shpae d-none d-lg-block">
            <img src="assets/img/shape/best-features.png" alt="">
        </div>
    </section>
    <!-- Best Features End -->
    <!-- Services Area Start -->
    <section class="service-area sky-blue section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>Como podemos te ajudar?</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-businessman"></span>
                        </div> 
                        <div class="service-cap">
                            <h4><a href="#">Gerencialmento Fácil</a></h4>
                            <p>Você não precisa se preocupar, fazemos toda a parte técnica pra você.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-pay"></span>
                        </div> 
                        <div class="service-cap">
                            <h4><a href="#">Relatórios</a></h4>
                            <p>Receba relatórios de como sua empresa está se saindo.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-plane"></span>
                        </div> 
                        <div class="service-cap">
                            <h4><a href="#">Ganhe Visibilidade</a></h4>
                            <p>Metodologias aplicadas ao aumento de visibilidade e engajamento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->
    <!-- Applic App Start -->
    <div class="applic-apps section-padding2">
        <div class="container-fluid">
            <div class="row">
                <!-- slider Heading -->
                <div class="col-xl-4 col-lg-4 col-md-8">
                    <div class="single-cases-info mb-30">
                        <h3>Nossos projetos<br> Screenshot</h3>
                        <p>Lorem ipsum dolor sit amet, consecadipiscing elit, sed do eiusmod tempor incididunt ut ore et dolore magna aliqua. Quis ipsum suspendisse gravida. Risus commodo viverra maecenasan lacus vel facilisis. </p>
                    </div>
                </div>
                <!-- OwL -->
                <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                    <div class="app-active owl-carousel"> 
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App1.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App2.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App3.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App2.png" alt="">
                        </div>
                        <div class="single-cases-img">
                            <img src="assets/img/gallery/App1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Applic App End -->
    <!-- Best Pricing Start -->
    <section class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-tittle section-tittle2 text-center">
                        <h2>Escolha um plano de acordo com o seu negócio.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Pricing End -->
    <!-- Pricing Card Start -->
    <div class="pricing-card-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>1 Ano</span>
                            <h4>$200 <span>/ mês</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Até 5 páginas</li>
                                <li>SEO Básico</li>
                                <li>Hospedagem e domínio por 1 ano</li>
                                <li>Suporte básico por 3 meses</li>
                            </ul>
                            <a href="services.html" class="btn card-btn1">Fechar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6">
                    <div class="single-card  text-center mb-30">
                        <div class="card-top">
                            <span>1 Ano</span>
                            <h4>$450 <span>/ mês</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Até 10 páginas</li>
                                <li>Formulário de contato avançado</li>
                                <li>Blog com CMS</li>
                                <li>Hospedagem e domínio por 1 ano</li>
                                <li>Suporte por 6 meses</li>
                            </ul>
                            <a href="services.html" class="btn card-btn1">Fechar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>1 Ano</span>
                            <h4>$850 <span>/ mês</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Páginas Ilimitadas</li>
                                <li>Loja virtual</li>
                                <li>Otimização SEO avançada</li>
                                <li>Funcionalidades avançadas</li>
                                <li>Treinamento</li>
                                <li>Suporte técnico por 1 ano</li>
                                <li>Hospedagem dedicada e domínio por 1 ano</li>
                            </ul>
                            <a href="services.html" class="btn card-btn1">Fechar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>Serviços Adicionais</span>
                            <h4>tabela</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Manutenção Mensal $300</li>
                                <li>Marketing Digital $500<li>
                                <li>Atualizações de Conteúdo $200</li>
                                <li>Consultoria e Treinamento Personalizado $150/h</li>
                            </ul>
                            {{-- <a href="services.html" class="btn card-btn1">Fechar</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Card End -->
    <!-- Our Customer Start -->
    {{-- <div class="our-customer section-padd-top30">
        <div class="container-fluid">
        <div class="our-customer-wrapper">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-tittle text-center">
                            <h2>What Our Customers<br> Have to Say</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="customar-active dot-style d-flex dot-style">
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man1.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                        
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                        
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man3.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                        
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="assets/img/shape/man2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                    <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>            --}}
    <!-- Our Customer End -->
    <!-- Available App  Start-->
    <div class="available-app-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="app-caption">
                        <div class="section-tittle section-tittle3">
                            <h2>Eleve o nível do seu negócio</h2>
                            <p>Deixa que cuidamos do seu problema você gasta sua energia no que entende.</p>
                            {{-- <div class="app-btn">
                                <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt=""></a>
                                <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="app-img">
                        <img src="assets/img/shape/available-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="app-shape">
            <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
            <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
            <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
        </div>
    </div>
    <!-- Available App End-->
    <!-- Say Something Start -->
    <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                    <div class="say-something-cap">
                        <h2>Mande uma mensagem para conversarmos melhor.</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="say-btn">
                        <a href="#" class="btn radius-btn">Contato</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- shape -->
        <div class="say-shape">
            <img src="assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
            <img src="assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Say Something End -->
@endsection