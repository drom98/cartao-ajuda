<div class="card">
    <div class="card-content">
        <p class="card-subtitle has-text-weight-bold has-text-link">
            {{ $negocio->nome }}
        </p>
        <p class="card-subtitle has-text-weight-bold has-text-grey-dark">
            Total angariado: €{{ $total }}
        </p>
    </div>
</div>
<div class="column"></div>
<div class="card">
    <div class="card-content">
        <p class="card-subtitle has-text-weight-bold has-text-success">
            Cartões ativos
        </p>
        <p class="card-subtitle has-text-weight-bold has-text-grey-dark">
            {{ count( $negocio->cartoes->where('estado', 1)) }}
        </p>
    </div>
</div>
<div class="column"></div>
<div class="card">
    <div class="card-content">
        <p class="card-subtitle has-text-weight-bold has-text-warning">
            Cartões a aguardar aprovação
        </p>
        <p class="card-subtitle has-text-weight-bold has-text-grey-dark">
            {{ count( $negocio->cartoes->where('estado', 0)) }}
        </p>
    </div>
</div>
