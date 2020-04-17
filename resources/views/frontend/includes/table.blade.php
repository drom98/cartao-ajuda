<div class="card">
    <table class="table is-fullwidth has-shadow" id="tabela">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Valor</th>
            <th>Comprado a</th>
            <th>Validade</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $negocio->cartoes as $cartao)
                <tr>
                    <td>{{ $cartao->nome_cliente . ' ' . $cartao->apelido_cliente }}</td>
                    <td>{{ $cartao->email }}</td>
                    <td>€{{ $cartao->opcao_cartao->valor }}</td>
                    <td>{{ $cartao->created_at->format('d M Y') }} <span class="has-text-grey-light">{{ $cartao->created_at->format('H\\hi') }}</span></td>
                    <td>{{ $cartao->created_at->addYears(1)->format('d M Y') }}</td>
                    <td>
                        @if( $cartao->estado == 0)
                        <button class="button is-success is-light is-small is-rounded" id="btnAtivar" name="{{ $cartao->id }}">Ativar</button>
                        <button class="button is-link is-light is-small is-rounded" id="btnVerCodigo" name="{{ $cartao->id }}">Ver código</button>
                        @else
                        <p class="button is-success is-light is-small is-rounded" style="cursor: default;">Ativado</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

