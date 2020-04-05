<div class="tabs">
    <ul>
        <li class="{{ (request()->is('home*')) ? 'is-active' : ''}}">
            <a href="{{ route('home') }}">
                <span class="icon is-small"><i class="fas fa-gift"></i></span>
                <span>Gerir cartões</span>
            </a>
        </li>
        <li class="{{ (request()->is('loja*')) ? 'is-active' : ''}}">
            <a href="{{ route('home.loja') }}">
                <span class="icon is-small"><i class="fas fa-store"></i></span>
                <span>Configurar loja</span>
            </a>
        </li>
        <li>
            <a class="has-text-grey-light" style="cursor: default">
                <span class="icon is-small"><i class="fas fa-paper-plane"></i></span>
                <span>Emails</span>
            </a>
        </li>
    </ul>
</div>
