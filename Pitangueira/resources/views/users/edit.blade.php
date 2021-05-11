<form class="app_form" action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">

    <span>Nome:</span>
    <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') ?? $user->name }}"/>

    <span>E-mail:</span>
    <input type="email" name="email" placeholder="Melhor e-mail"
           value="{{ old('email') ?? $user->email }}"/>

    <span>Senha:</span>
    <input type="password" name="password" placeholder="Senha de acesso" value="{{ old('password') ?? $user->password }}"/>

    <span>Perfil:</span>
    <select name="perfil">
        <option value="0" {{ old('perfil') == '0' ? 'selected' : ( $user->perfil == '0' ? 'selected' : '') }}>Técnico</option>
        <option value="1" {{ old('perfil') == '1' ? 'selected' : ( $user->perfil == '1' ? 'selected' : '') }}>Gestor</option>
    </select>

    <button type="submit">Salvar Alterações
    </button>
</form>
