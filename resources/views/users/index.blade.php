@extends('layouts.app')

@section('titulo', 'Lista de usuários')

@section('conteudo')
    <h1 class="h3 mb-3">Usuários cadastrados</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Cadastro</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}"
                           class="btn btn-sm btn-outline-primary">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum usuário cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        console.log('Listagem de usuários carregada');
    </script>
@endpush
