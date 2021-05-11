@extends('layouts.app')

@section('content')
<form>
    <h1>Adicionar Usuário</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome Usuário</label>
        <input type="text" class="form-control" id="inputName" placeholder="Informe um nome">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
