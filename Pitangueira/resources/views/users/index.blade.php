
        <table width="100" style="width: 100%;">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ route('users.edit', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                    <td><a href="mailto:{{ $user->email }}" class="text-orange">{{ $user->email }}</a></td>
                    <td><a href="{{ route('users.destroy', ['user' => $user->id]) }}">Apagar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>



