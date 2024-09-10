@extends('layouts.main')


@section('content')

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
            <div class="text-success">th</div>
            <div class="text-1000">grillo</div>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#features">Serviços</a></li>
            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#pricing">Planos</a></li>
            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#testimonial">Depoimentos</a></li>
            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#faq">FAQ</a></li>
            </ul>
            <form class="ps-lg-5">
            {{-- <button class="btn btn-lg btn-primary rounded-pill order-0" type="submit">Entre em contato</button> --}}
            <a href="https://api.whatsapp.com/send?phone=5541996241011&text=Ol%C3%A1%2C+th%21%0A%0Avenho+do+site+%2Athgrillo.com%2A.%0A%0AVou+te+passar+mais+informa%C3%A7%C3%B5es+sobre+meu+neg%C3%B3cio."
                class="btn btn-lg btn-success rounded-pill order-0" 
                target="_blank" 
                rel="noopener noreferrer">Entre em contato
            </a>

            </form>
        </div>
        </div>
    </nav>
    <section class="py-0" id="home">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
        <div class="row align-items-center py-8">
            <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end">
                <img class="img-fluid" src="assets/img/illustrations/mobile.png" width="350" alt="" />
            </div>
            <div class="col-md-7 col-lg-6 text-center text-md-start"><span class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-50 w-md-75 w-xl-50 mb-3">#1 Sua Melhor Opção<img class="img-fluid float-start me-3" src="assets/img/illustrations/arrow-right.png" alt=""/></span>
            <h1 class="mb-4 display-3 fw-bold lh-sm">Soluções em TI <br class="d-block d-lg-none d-xl-block" />pra sua Empresa</h1>
            <p class="mt-3 mb-4 fs-1">Transforme seu negócio com soluções tecnológicas<br class="d-none d-lg-block" /> que maximizam a produtividade e impulsionam <br class="d-none d-lg-block" /> sua eficiência para um novo patamar.</p><a class="btn btn-lg btn-success rounded-pill hover-top" href="#" role="button">Conhecer</a>
            {{-- <a class="btn btn-link ps-md-4" href="#" role="button"> Watch demo video</a> --}}
            </div>
        </div>
        </div>
    </section>

    <section class="py-7">
        <div class="container">
        <div class="row">
            <div class="col-12 mx-auto align-items-center text-center">
            <p class="mb-4">Clientes e Parceiros</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center justify-content-lg-around">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-1.png" alt="MarGP Logo" style="width: 25%;"/></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img class="rounded" src="assets/img/gallery/company-2.png" alt="" style="width: 25%;"/></div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img class="rounded" src="assets/img/gallery/company-3.png" alt="" style="width: 25%;"/></div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="py-5" id="features">
        <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="assets/img/illustrations/feature-bg.png" width="550" alt="" /></div>
            <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
            <h6 class="fw-bold fs-4 display-3 lh-sm">Serviços <br />oferecidos</h6>
            <p class="my-4">Aumente seu alcance e engajamento no mundo digital. Se preocupe somente com o que importa pra você.</p>
            <div class="d-flex align-items-center mb-5">
                <div><img class="img-fluid" src="assets/img/illustrations/fast-performance.png" width="90" alt="" /></div>
                <div class="px-4">
                <h5 class="fw-bold text-danger">Sites Rápidos</h5>
                <p>Utilizamos tecnologias modernas para garantir que seu <br class="d-none d-xl-block"> negócio ou empresa esteja sempre online com velocidade <br class="d-none d-xl-block">e eficiência.estar sempre online.</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-5">
                <div><img class="img-fluid" src="assets/img/illustrations/prototype.png" width="90" alt="" /></div>
                <div class="px-4">
                <h5 class="fw-bold text-primary">Projetos Personalizaveis</h5>
                <p>Desenvolvemos soluções sob medida para atender <br class="d-none d-xl-block"> às necessidades específicas do seu negócio, <br class="d-none d-xl-block">garantindo um site que reflete sua identidade.</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-5">
                <div><img class="img-fluid" src="assets/img/illustrations/vector.png" width="90" alt="" /></div>
                <div class="px-4">
                <h5 class="fw-bold text-success">Criação de Conteúdo</h5>
                <p>Oferecemos serviços de criação de conteúdo original <br class="d-none d-xl-block">e relevante para atrair e engajar seu <br class="d-none d-xl-block"> público-alvo de forma efetiva.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
        <div class="row align-items-center mb-6">
            <div class="col-md-5 col-lg-4 offset-lg-1">
            <h1 class="fw-bold lh-base">Esteja onde seus clientes se conectam! Presença é tudo.</h1>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
            <p class="mb-0 text-justify">Com a maioria dos acessos à internet sendo feitos por dispositivos móveis, criamos sites otimizados para celulares para garantir uma experiência perfeita em qualquer lugar. Esteja presente nos canais mais relevantes e ofereça acesso fácil a seus clientes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/automatic.png" width="90" alt="" /></div>
            <h5 class="fw-bold text-danger">Aumente a carteira de clientes</h5>
            <p class="mt-2 mb-0">Atraia mais clientes e expanda seus negócios com nossa ajuda.
            </p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/network.png" width="90" alt="" /></div>
            <h5 class="fw-bold text-primary">Conexões</h5>
            <p class="mt-2 mb-0">Fortaleça sua presença online e conecte-se com seu público-alvo.
            </p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/rewards.png" width="90" alt="" /></div>
            <h5 class="fw-bold text-success">Pós-venda e Suporte</h5>
            <p class="mt-2 mb-0">Oferecemos suporte contínuo e atendimento pós-venda para garantir sua satisfação.
            </p>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="py-6">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/call-to-action.png" width="550" alt="" /></div>
            <div class="col-md-6 text-center text-md-start offset-md-1">
            <h6 class="fw-bold fs-4 display-3 lh-sm">Desenhado &amp; programado<br />pro seu negócio<br /></h6>
            <p class="my-4 pe-xl-5 text-justify">Criamos sites personalizados que atendem às necessidades específicas do seu negócio. Além disso, oferecemos serviços adicionais para incluir ferramentas customizáveis, garantindo que sua solução digital seja perfeita e adaptada às suas demandas.</p>
            {{-- <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Learn more</a> --}}
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="py-6">
        <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
            <h6 class="fw-bold fs-4 display-3 lh-sm">Por que escolher <br />nossa equipe? </h6>
            <p class="mb-0">Nosso time usa tecnologia de ponta e design inovador para destacar sua presença online e conectar você com seu público nas principais plataformas digitais.
            </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/app.png" width="90" alt="" />
                <h5 class="fw-bold">Desenvolvimento Web</h5>
                <p class="mb-md-0">Atraia mais clientes e expanda seus negócios com soluções web personalizadas e eficazes, criadas para atender às suas necessidades específicas.
                </p>
            </div>
            </div>
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/time-award.png" width="90" alt="" />
                <h5 class="fw-bold">Foco na Qualidade</h5>
                <p class="mb-md-0">Fortaleça sua presença online com um site de alta qualidade que conecta você diretamente ao seu público-alvo, oferecendo uma experiência de usuário excepcional.
                </p>
            </div>
            </div>
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/cloud.png" width="90" alt="" />
                <h5 class="fw-bold">Cloud / Host</h5>
                <p class="mb-md-0">Oferecemos soluções de hospedagem confiáveis e escaláveis na nuvem, garantindo que seu site esteja sempre acessível e com excelente desempenho.
                </p>
            </div>
            </div>
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/customization.png" width="90" alt="" />
                <h5 class="fw-bold">Customização</h5>
                <p class="mb-md-0">Desenvolvemos ferramentas e funcionalidades sob medida para atender às necessidades específicas do seu negócio, proporcionando uma solução única e eficiente.
                </p>
            </div>
            </div>
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/ux.png" width="90" alt="" />
                <h5 class="fw-bold">Planejamento UX</h5>
                <p class="mb-md-0">Criamos experiências de usuário (UX) intuitivas e envolventes, planejadas para maximizar a satisfação e facilitar a navegação dos seus visitantes.
                </p>
            </div>
            </div>
            <div class="col-md-4 mb-6">
            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/support.png" width="90" alt="" />
                <h5 class="fw-bold">Suporte Técnico</h5>
                <p class="mb-md-0">Disponibilizamos suporte técnico contínuo para garantir que seu site funcione perfeitamente e para resolver qualquer problema rapidamente.
                </p>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="py-6">
        <div class="container">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-5 order-md-1 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/ultimate-feature.png" alt="" /></div>
            <div class="col-md-6 text-center text-md-start">
                <h6 class="fw-bold fs-4 display-3 lh-sm">Ultimos serviços<br />oferecidos</h6>
                <p class="my-4 pe-xl-5">Confira nossos projetos mais recentes e veja como aplicamos soluções inovadoras para atender às necessidades dos nossos clientes, sempre com foco em resultados excepcionais.</p>
                <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                    <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
                    <h5 class="fw-bold text-undefined">Criação de Site</h5>
                    <p class="mt-2 mb-0">Nosso serviço mais solicitado, o desenvolvimento web, combina design moderno e funcionalidade avançada para criar sites que atendem às suas necessidades e superam suas expectativas.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                    <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/support.png" width="90" alt="" /></div>
                    <h5 class="fw-bold text-undefined">Suporte e Pós-vendas</h5>
                    <p class="mt-2 mb-0">Nosso compromisso vai além da entrega do projeto. Oferecemos suporte técnico contínuo e atenção pós-venda para garantir que seu site funcione perfeitamente e que qualquer problema seja resolvido rapidamente.</p>
                    </div>
                </div>
                </div><a class="btn btn-lg btn-success rounded-pill hover-top" href="#" role="button">Contato</a>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section class="py-8" id="pricing">

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xxl-5 text-center mb-3">
            <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Garanta o melhor Plano</h6>
            <p class="mb-4">Além dos planos definidos, temos serviços adicionais. Como Criação de conteúdo para blogs, trafego pago e landing pages.</p>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-12 mb-3">
            <div class="d-flex justify-content-center">
                {{-- <label class="form-check-label me-2" for="customSwitch1">Mensal</label>
                <div class="form-check form-switch">
                <input class="form-check-input" id="customSwitch1" type="checkbox" checked="checked" />
                <label class="form-check-label align-top" for="customSwitch1">Anual</label>
                </div> --}}
            </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg mb-4 border-0">
                <div class="card-header border-bottom-0 pt-7 pb-5">
                <div class="d-flex justify-content-center">
                    <h1 class="fw-bold">$69</h1><span class="d-flex align-items-center">/mês</span>
                </div>
                <h5 class="fw-bold text-center">Basic</h5><span class="text-700 text-center d-block">Empresa pequena ou Portfólio</span>
                </div>
                <div class="card-body mx-auto">
                <ul class="list-unstyled mb-4">
                    <li class="text-700 py-2 text-secondary">Design Responsivo</li>
                    <li class="text-700 py-2 text-secondary">Até 5 páginas</li>
                    <li class="text-700 py-2 text-secondary">SEO básico</li>
                    <li class="text-700 py-2 text-secondary">Hospedagem e domínio</li>
                    <li class="text-700 py-2 text-secondary">Suporte Técnico 3 meses    </li>
                </ul><a class="btn btn-lg btn-success rounded-pill mb-3" href="#">Fechar</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header border-bottom-0 pt-7 pb-5">
                <div class="d-flex justify-content-center">
                    <h1 class="fw-bold">$249</h1><span class="d-flex align-items-center">/mês</span>
                </div>
                <h5 class="fw-bold text-center">Business</h5><span class="text-700 text-center d-block">For small teams or office</span>
                </div>
                <div class="card-body mx-auto">
                <ul class="list-unstyled mb-4">
                    <li class="text-700 py-2 text-secondary">Design Responsivo</li>
                    <li class="text-700 py-2 text-secondary">Até 10 páginas personalizadas</li>
                    <li class="text-700 py-2 text-secondary">SEO otimizado</li>
                    <li class="text-700 py-2 text-secondary">Blog</li>
                    <li class="text-700 py-2 text-secondary">Funcionalidades simples</li>
                    <li class="text-700 py-2 text-secondary">Suporte por 6 meses</li>
                </ul>
                <div class="d-flex flex-column"> <a class="btn btn-lg btn-success rounded-pill mb-3" href="#">Fechar</a></div>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header border-bottom-0 pt-7 pb-5">
                <div class="d-flex justify-content-center">
                    <h1 class="fw-bold">$749</h1><span class="d-flex align-items-center">/mês</span>
                </div>
                <h5 class="fw-bold text-center">Master</h5><span class="text-700 text-center d-block">E-commerce, empresas com alta demanda de conteúdo.</span>
                </div>
                <div class="card-body mx-auto">
                <ul class="list-unstyled mb-4">
                    <li class="text-700 py-2 text-secondary">Design Responsivo</li>
                    <li class="text-700 py-2 text-secondary">Hospedagem dedicada</li>
                    <li class="text-700 py-2 text-secondary">Páginas Ilimitadas</li>
                    <li class="text-700 py-2 text-secondary">SEO otimizado / Performance</li>
                    <li class="text-700 py-2 text-secondary">Blog, Loja Virtual</li>
                    <li class="text-700 py-2 text-secondary">Funcionalidades Avançadas</li>
                    <li class="text-700 py-2 text-secondary">Suporte por 12 meses</li>
                </ul>
                <div class="d-flex flex-column"> <a class="btn btn-lg btn-success rounded-pill mb-3" href="#">Fechar</a></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    {{-- <section class="py-8" id="testimonial">
        <div class="container-lg">
        <div class="row flex-center">
            <div class="col-sm-10 col-md-5 col-lg-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/testimonial.png" alt="" /></div>
            <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start offset-md-1">
            <h6 class="fw-bold fs-4 display-3 lh-sm"> Meet Client Satisfaction <br />by using product</h6>
            <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume.Elevant channels such as Facebook.</p>
            <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100">
                    <div class="col-12">
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                        <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                    </div>
                    <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                        <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user.png" width="100" alt="" />
                        <div class="w-lg-50 my-3">
                            <h5 class="mb-0 fw-bold">Zoltan Nemeth</h5>
                            <p class="fw-normal mb-0">CEO of Pixer Lab</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                    <div class="col-12">
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                        <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                    </div>
                    <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                        <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-1.png" width="100" alt="" />
                        <div class="w-lg-50 my-3">
                            <h5 class="mb-0 fw-bold">Jhon Doe</h5>
                            <p class="fw-normal mb-0">Web Developer</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row h-100">
                    <div class="col-12">
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                        <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                    </div>
                    <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                        <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-2.png" width="100" alt="" />
                        <div class="w-lg-50 my-3">
                            <h5 class="mb-0 fw-bold">Viezh Robert</h5>
                            <p class="fw-normal mb-0">UI/UX Designer</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="position-relative mt-sm-n5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
            </div>
            </div>
        </div>
        </div>
    </section> --}}


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-8" id="faq">

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center mb-3">
            <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">FAQ</h6>
            <p class="mb-5">Caso sua pergunta não esteja elencada abaixo, nos envie uma mensagem!</p>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-lg-9">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span class="mb-0 fw-bold text-start fs-1 text-1000">Posso escolher o tema do meu site?</span></button>
                </h2>
                <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-100">Sim, possuímos uma boa variedade de templates pra você escolher o que mais combina com seu negócio.</div>
                </div>
                </div>
                <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"><span class="mb-0 fw-bold text-start fs-1 text-1000">Em quanto tempo o meu site estará no ar?</span></button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-100">Alguns projetos podem estar no ar em apenas duas semanas, mas isso varia do tamanho e complexidade da sua aplicação. Projetos são entregues em média 3 ou 4 semanas.</div>
                </div>
                </div>
                <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"><span class="mb-0 fw-bold text-start fs-1 text-1000">Preciso de um sistema customizado, vocês fazem?</span></button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-100">Sim, faremos uma reunião para entender sobre situação atual e avaliaremos o melhor solução pro tamanho da sua empresa.</div>
                </div>
                </div>
                <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><span class="mb-0 fw-bold text-start fs-1 text-1000">O suporte técnico pode me ajudar em qualquer momento?</span></button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-100">Sim, nosso suporte é 24/7. Atendemos a qualquer horário.</div>
                </div>
                </div>
                <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"><span class="mb-0 fw-bold text-start fs-1 text-1000">Podemos fazer uma parceria?</span></button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-100">Claro, estaremos sempre abertos para novas parcerias e trabalhos em conjunto. Nós só crescemos mais se mais pessoas estiverem conectadas.</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->

    </section>

    {{-- <section class="py-6">
        <hr />
        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-7 order-md-1 text-center text-md-start z-index-2 cta-image"><img class="img-fluid mb-4 mb-md-0" src="assets/img/illustrations/cta.png" width="850" alt="" /></div>
            <div class="col-md-7 col-lg-5 text-center text-md-start">
            <h1 class="display-3 fw-bold lh-sm">Download our App now</h1>
            <p class="my-4"> The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
            <div class="d-flex justify-content-center d-md-inline-block"><a class="pe-2 pe-sm-3 pe-md-4" href="!#"><img src="assets/img/illustrations/google-play.png" width="160" alt="" /></a><a href="!#"><img src="assets/img/illustrations/app-store.png" width="160" alt="" /></a></div>
            </div>
        </div>
        </div>
    </section> --}}

    <section class="py-8 bg-1000">
        <div class="container">
        <div class="row flex-center">
            <div class="col-auto mb-5"><a class="pe-2 d-flex align-items-center text-decoration-none fw-bold fs-3" href="#">
                <div class="text-warning">th</div>
                <div class="text-white">grillo</div>
            </a></div>
        </div>
        <div class="row flex-center">
            <div class="col-auto mb-5">
            <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Home</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Serviços</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Planos</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Depoimentos</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">FAQ</a></li>
            </ul>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-auto mb-5">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-hash" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 16 16">
                    <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                    </svg></a></li>
            </ul>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-auto">
            <p class="mb-0 fs--1 text-700">feito com&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp; by&nbsp;<a class="text-700" href="https://thgrillo.com/" target="_blank">thgrillo </a>
            </p>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

@endsection