<nav class="navbar is-fixed-top is-link has-shadow" role="navigation" aria-label="main navigation" style="border-bottom: lightgrey solid 1px;">
    <div class="container">
        <div class="navbar-brand has-text-weight-bold">
            <a class="navbar-item" href="/home">
                <!--
                <img src="{{ asset('img/cartao_ajuda_logo.png') }}" >
                -->
                Cartão Ajuda
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navMenu" class="navbar-menu">
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
                @isset($negocio)
                    <div class="navbar-item">
                        <a class="button is-link is-light is-small" href="{{ route('negocio.front', $negocio->url) }}" target="_blank">
                            <strong>
                                <i class="fas fa-external-link-alt"></i>
                                Abrir página
                            </strong>
                        </a>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            {{ $negocio->nome }}
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
                @endisset
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
