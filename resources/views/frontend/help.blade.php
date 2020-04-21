@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column">
                @include('frontend.includes.menu')
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <h1 class="title is-size-4">1. Definir pelo menos um método de pagamento.</h1>
                    <p class="subtitle is-size-6">Sempre que um cliente compra um cartão através da sua página, é lhe enviado um email com os métodos de pagamento que tiver definido.</p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h1 class="title is-size-4">2. Definir as quantias de cada cartão.</h1>
                    <p class="subtitle is-size-6">Pode definir as quantias que deseja para cada cartão bem como colocar uma descrição para cada uma.</p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <h1 class="title is-size-4">3. Partilhe a sua página com os seus clientes e amigos.</h1>
                    <p class="subtitle is-size-6">A melhor forma de dar a conhecer a sua página é partilhando-a com todos os seus clientes, amigos e familiares.</p>
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://cartaoajuda.pt/store/{{ $negocio->url }}&layout=button&size=large&width=77&height=28&appId" width="100%" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h1 class="title is-size-4">4. Ativar cartões.</h1>
                    <p class="subtitle is-size-6">Assim que confirmar o pagamento de um cartão, não se esqueça de o ativar. O cliente receberá o cartão no email com o respetivo código.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
