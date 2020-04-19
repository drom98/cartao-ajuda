<nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
              <h1 class="has-text-weight-bold is-link">Cartão Ajuda</h1>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="#funcionamento">Funcionamento</a>
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a href="{{ route('login') }}" class="button is-rounded is-small">Iniciar sessão</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('register') }}" class="button is-link is-light is-rounded is-small">Registar negócio</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
