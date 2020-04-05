<form action="{{ route('home.addLoja') }}" method="post">
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
                        <input name="nome" class="input" type="text" placeholder="Nome da loja">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Logotipo</label>
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
                <button class="button is-link is-light is-small" id="btnAdicionarMetodo">
                     <span class="icon">
                        <i class="fas fa-plus-circle"></i>
                     </span>
                    <span>Adicionar</span>
                </button>
                <div id="inserirMetodos"></div>
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
@push('scriptAdicionarMetodoPagamento')
<script>
    $(document).ready(function(){
        $("#btnAdicionarMetodo").click(function(e){
            e.preventDefault();
            $("#inserirMetodos").append("<div class=\"field\">\n" +
                "                        <label class=\"label\">Nome</label>\n" +
                "                        <div class=\"control\">\n" +
                "                            <input class=\"input\" type=\"text\" placeholder=\"Nome do método de pagamento\">\n" +
                "                        </div>\n" +
                "                    </div>\n" +
                "                    <div class=\"field\">\n" +
                "                        <label class=\"label\">Descrição</label>\n" +
                "                        <div class=\"control\">\n" +
                "                            <input class=\"input\" type=\"text\" placeholder=\"Descrição do método de pagamento\">\n" +
                "                        </div>\n" +
                "                    </div>");
        });
    });
</script>
@endpush

