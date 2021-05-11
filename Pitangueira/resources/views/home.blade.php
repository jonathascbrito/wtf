@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table width="100" style="width: 100%;">
                            <thead>
                            <tr>
                                <th># Id</th>
                                <th>Cliente</th>
                                <th>Técnico</th>
                                <th>Tipo Atendimento</th>
                                <th>Data da Execução</th>
                                <th>Obs.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($atendimentos as $atendimento)
                                <tr>
                                    <td>{{ $atendimento->id }}</td>
                                    <td>{{ $atendimento->nome_cliente }}</td>
                                    <td>{{ $atendimento->user->name }}</td>
                                    <td>{{ $atendimento->tipoAtendimento->nome }}</td>
                                    <td>{{ $atendimento->data_exec }}</td>
                                    <td>{{ $atendimento->observacao }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
