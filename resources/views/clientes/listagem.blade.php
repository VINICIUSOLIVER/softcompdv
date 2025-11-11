@extends("layouts.admin-app")

@section("content")
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Listagem de clientes</h5>
            <a href="{{ url("/clientes/novo") }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo cliente</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{!! $cliente->id !!}</th>
                        <td>{!! $cliente->nome !!}</td>
                        <td>{!! $cliente->cpf !!}</td>
                        <td>{!! $cliente->email !!}</td>
                        <td>{!! $cliente->ativo !!}</td>
                        <td>
                            <a href="{{ url("/clientes/{$cliente->id}/editar") }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
