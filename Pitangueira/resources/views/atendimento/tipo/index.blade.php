<table width="100" style="width: 100%;">
    <thead>
    <tr>
        <th>#</th>
        <th>Tipo de Atendimento</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tipoAtendimentos as $tipo)
        <tr>
            <td>{{ $tipo->id }}</td>
            <td><a href="{{ route('users.edit', ['tipoAtendimento' => $tipo->id]) }}">{{ $tipo->nome }}</a></td>
            <td><a href="{{ route('tipoAtedimento.destroy', ['tipoAtendimento' => $tipo->id]) }}">Apagar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
