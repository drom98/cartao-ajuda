<div class="tabs">
    <ul>
        <li class="{{ (request()->is('home*')) ? 'is-active' : ''}}">
            <a href="{{ route('home') }}">
                <span class="icon is-small"><i class="fas fa-gift"></i></span>
                <span>Gerir cartões</span>
            </a>
        </li>
        <li class="{{ (request()->is('settings*')) ? 'is-active' : ''}}">
            <a href="{{ route('loja.editar') }}">
                <span class="icon is-small"><i class="fas fa-store"></i></span>
                <span>Configurar página</span>
            </a>
        </li>
        <li class="{{ (request()->is('instrucoes*')) ? 'is-active' : ''}}">
            <a href="#">
                <span class="icon is-small"><i class="fas fa-question-circle"></i></span>
                <span>Instruções</span>
            </a>
        </li>
    </ul>
</div>
