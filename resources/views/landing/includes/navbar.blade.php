<nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <h1 class="has-text-weight-bold is-link">Cartão Ajuda</h1>
            </a>
            <a href="https://www.facebook.com/cartaoajuda.pt/" target="_blank" class="navbar-item">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/cartaoajuda.pt/" target="_blank" class="navbar-item">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://m.me/cartaoajuda.pt" target="_blank" class="navbar-item">
                <i class="fab fa-facebook-messenger"></i>
            </a>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">

            </div>
            <div class="navbar-end">
                <a class="navbar-item" href="#funcionamento">Funcionamento</a>
                <a class="navbar-item" href="#estabelecimentos">Estabelecimentos aderentes</a>
                <a class="navbar-item" href="{{ route('exemplo') }}" target="_blank">Página de exemplo</a>
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a href="{{ route('login') }}" class="button is-rounded is-small">Iniciar sessão</a>
                        </p>
                        <p class="control">
                            <a href="{{ route('register') }}" class="button is-link is-light is-rounded is-small">Criar página</a>
                        </p>
                    </div>
                </div>
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
