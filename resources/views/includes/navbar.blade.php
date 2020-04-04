<nav class="navbar is-fixed-top is-link has-shadow" role="navigation" aria-label="main navigation" style="border-bottom: lightgrey solid 1px;">
    <div class="container">
        <div class="navbar-brand has-text-weight-bold">
            <a class="navbar-item" href="/home">
                <!--
                <img src="{{ asset('img/cartao_ajuda_logo.png') }}" >
                -->
                Cartão Ajuda
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

            </div>


            <div class="navbar-end">
                @guest
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-link">
                            <strong>Registar</strong>
                        </a>
                        <a class="button is-light">
                            Entrar
                        </a>
                    </div>
                </div>
                @endguest
                <div class="navbar-item">
                    <a class="button is-link is-light is-small">
                        <strong>
                            <i class="fas fa-external-link-alt"></i>
                            Abrir loja
                        </strong>
                    </a>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown">
                        <a
                            class="navbar-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();
                            ">
                            <i class="fas fa-sign-out-alt"></i>
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
