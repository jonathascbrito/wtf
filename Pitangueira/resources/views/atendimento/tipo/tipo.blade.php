<form class="app_form" action="{{ route('atendimento.create') }}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $user->id }}">

    <h1>Tipo de Atendimento</h1>
    <span>Nome:</span>
    <input type="text" name="nome" placeholder="Tipo de Atendimento" value=""/>

    <button type="submit">Salvar Alterações</button>
</form>
