<form class="app_form" action="{{ route('atendimento.store') }}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $user->id }}">

    <span>Nome:</span>
    <input type="date" name="data_exec" placeholder="Data da Execução" value="{{ old('data_exec') }}"/>

    <span>Perfil:</span>
    <select name="tipo_atendimento">
        @foreach($tipoAtendimentos as $tipoAtendimento)
            <option value="{{ $tipoAtendimento->id }}" }}>{{ $tipoAtendimento->nome }}</option>
        @endforeach
    </select>

    <span>Nome Cliente:</span>
    <input type="text" name="nome_cliente" placeholder="Nome cliente atendimento"
           value=""/>

    <span>Descrição:</span>
    <textarea name="descricao"></textarea>

    <button type="submit">Salvar Alterações
    </button>
</form>

