    <header id="header" class="header d-flex align-items-center fixed-top">

        <a href="{{url('tour')}}">
            <img src="{{asset('img/logo_listados_360.png')}}" height="98px" margin-left="40px" style="margin-left: 290px"> 
        </a>

    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        

        <nav id="navmenu" class="navmenu" style="margin-right: 10px">
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
