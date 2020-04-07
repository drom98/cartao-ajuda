<form action="{{ route('home.addLoja') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Aparência
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input name="nome" class="input" type="text" placeholder="Nome da loja" value="{{ $loja->nome }}">
                    </div>
                    <p class="help">O nome da sua loja irá aparecer na página de compra do cartão.</p>
                </div>

                <div class="field">
                    <label class="label">Logotipo</label>
                    @if($loja->logo)
                    <figure class="image is-96x96">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                    @endif
                    <div class="control">
                        <input name="logo" class="input" type="file">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Formas de pagamento
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">Formas de pagamento</label>
                    <div class="control">
                        <textarea name="forma_pagamento" class="textarea has-fixed-size" placeholder="Exemplo: MB WAY: 910000000&#10;IBAN: PT71003506512633898833605"></textarea>
                    </div>
                    <p class="help">As formas de pagamento que inserir aqui serão enviadas no email que o cliente irá receber assim que comprar um cartão.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Página de compra
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">A sua mensagem</label>
                    <div class="control">
                        <textarea name="texto_compra" class="textarea has-fixed-size" placeholder="A sua mensagem..."></textarea>
                    </div>
                    <p class="help">Esta mensagem irá aparecer na sua página de compra. Descreva o seu negócio e deixe uma mensagem aos seus clientes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Página de agradecimento
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="field">
                    <label class="label">A sua mensagem</label>
                    <div class="control">
                        <textarea name="texto_agradecimento" class="textarea has-fixed-size" placeholder="Escreva a sua mensagem de agradecimento"></textarea>
                    </div>
                    <p class="help">Esta mensagem irá aparecer na página de agradecimento que surge assim que o cliente efetua a compra de um cartão.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="field is-grouped">
        <p class="control">
            <button type="submit" class="button is-success">
                Guardar
            </button>
        </p>
        <p class="control">
            <a class="button" href="{{ url()->previous() }}">
                Cancelar
            </a>
        </p>
    </div>
</form>
