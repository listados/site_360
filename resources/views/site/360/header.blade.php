<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{url('tour')}}">
            <img src="{{asset('img/logo_360_listados.png')}}" height="53px">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{url('tour')}}" class="active">Home</a></li>
                <li><a href="{{url('tour/#benefits')}}">Benefícios</a></li>
                <li><a href="{{url('tour/#step-by-step')}}">Criar tour</a></li>
                <li><a href="{{url('tour/#pricing')}}">Planos</a></li>
                <li><a href="{{url('tour/#faq')}}">Dúvidas</i></a></li>
                <li><a href="{{url('tour/#contact')}}">Contato</a></li>
                <li><a href="{{url('tour')}}">Trabalhe Conosco</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <nav>
            <a href="https://360.listados.com.br/backend/login.php" target="_blank">Entrar</a>
            <a class="btn-getstarted" href="https://360.listados.com.br/backend/register.php" target="_blank">Cadastrar</a>
        </nav>
    </div>
</header>
