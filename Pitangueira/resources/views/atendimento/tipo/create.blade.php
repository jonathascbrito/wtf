<form class="app_form" action="{{ route('atendimento.createTipoAtendimento') }}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $user->id }}">

    <span>Tipo de atendimento:</span>
    <input type="text" name="nome" placeholder="Tipo de Atendimento" value=""/>

    <button type="submit">Salvar Alterações
    </button>
</form>
