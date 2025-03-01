    <header id="header" class="header d-flex fixed-top">
        <div class="container">
            <div class="row  header-action">
                <div class="col">
                    <a href="{{ url('tour') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                        <img src="{{ asset('img/logo_listados_360.png') }}">
                    </a>
                </div>
                <div class="col  d-flex align-items-center">
                    <div
                        class="header-container nav-bg-menu container-fluid container-xl position-relative justify-content-between">
                        <nav id="navmenu" class="navmenu  ">
                            <ul class="text-white">
                                <li><a href="{{ url('tour') }}">360°</a></li>
                                <li><a href="{{ url('tour/#step-by-step') }}">Criar tour</a></li>
                                <li><a href="{{ url('tour/#services') }}">Características</a></li>
                                <li><a href="{{ url('tour/#pricing') }}">Planos</a></li>
                                <li><a href="{{ url('tour/#faq') }}">Dúvidas</i></a></li>
                                <li><a href="{{ url('tour/#work-with-us') }}">Trabalhe Conosco</a></li>
                            </ul>
                            <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
                        </nav>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <nav class="container-fluid container-xl position-relative">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <a href="https://360.listados.com.br/backend/login.php" target="_blank"
                                    class="text-custom-cadastre">Entrar
                                </a>
                            </div>
                            <div class="col">
                                <a class="d-none d-sm-block text-custom-cadastre"
                                    href="https://360.listados.com.br/backend/register.php" target="_blank">Cadastrar
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
