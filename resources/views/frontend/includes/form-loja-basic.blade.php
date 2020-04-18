<form action="{{ route('negocio.editar') }}" method="post" enctype="multipart/form-data">
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
                        <input name="nome" class="input" type="text" placeholder="Nome da loja" value="{{ $negocio->nome }}">
                    </div>
                    <p class="help">O nome da sua loja irá aparecer na página de compra do cartão.</p>
                </div>

                <div class="field">
                    <label class="label">Logotipo</label>
                    @if($negocio->logo)
                    <figure class="image is-96x96">
                        <img src="{{ asset('storage/logotipos').'/'.$negocio->logo }}">
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
                Métodos de pagamento
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>
                    <span class="icon has-text-info">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="has-text-info">
                    Pode deixar em branco os métodos que não necessita.
                    </span>
                </p>

                <label class="label">IBAN</label>
                <div class="field has-addons">
                    <p class="control">
                        <a class="button is-static">
                            PT50
                        </a>
                    </p>
                    <p class="control is-expanded">
                        <input name="metodo[]" class="input" type="text" placeholder="Insira o seu IBAN..." value="{{ $negocio->metodos_pagamento[0]->descricao }}">
                    </p>
                </div>
                <div class="field">
                    <label class="label">MB WAY</label>
                    <div class="control">
                        <input name="metodo[]" class="input" type="tel" placeholder="Insira o seu número de telemóvel associado ao MB WAY" value="{{ $negocio->metodos_pagamento[1]->descricao }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">PayPal</label>
                    <div class="control">
                        <input name="metodo[]" class="input" type="email" placeholder="Insira o seu email do PayPal" value="{{ $negocio->metodos_pagamento[2]->descricao }}">
                    </div>
                </div>
                <p class="help">Os métodos de pagamento que inserir aqui serão enviados no email que o cliente irá receber assim que comprar um cartão.</p>
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
                        <textarea name="texto_compra" class="textarea has-fixed-size" placeholder="A sua mensagem...">{{ $negocio->texto_compra }}</textarea>
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
                        <textarea name="texto_agradecimento" class="textarea has-fixed-size" placeholder="Escreva a sua mensagem de agradecimento">{{ $negocio->texto_agradecimento }}</textarea>
                    </div>
                    <p class="help">Esta mensagem irá aparecer na página de agradecimento que surge assim que o cliente efetua a compra de um cartão.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Valores dos cartões
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="columns">
                    @foreach( $negocio->opcoes_cartoes as $opcao)
                    <div class="column">
                        <div class="field">
                            <label class="label">Opção 1</label>
                            <div class="control">
                                <input name="valor[]" value="{{ $opcao->valor }}" class="input" type="number" step="5" min="5" max="100" placeholder="Insira um valor">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Título(opcional)</label>
                            <div class="control">
                                <input name="descricao[]" value="{{ $opcao->descricao }}" class="input" type="text" placeholder="Ex: Corte de cabelo...">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="help">Pode indicar o que o cliente irá receber em cada valor. Exemplo: corte de cabelo, refeição, etc...</p>
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
