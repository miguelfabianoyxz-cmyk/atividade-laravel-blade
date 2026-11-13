@extends('layouts.app')

@section('titulo', 'Lista de usuários')

@section('conteudo')
    <h1 class="h3 mb-3">Usuários cadastrados</h1>

    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Verificado</th>
                <th>Cadastro</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                @php
                    $dias = $user->created_at->diffInDays(now());
                    $situacao = $dias < 1 ? 'novo' : ($dias <= 7 ? 'recente' : 'antigo');
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $user->name }}
                        @if ($loop->first)
                            <span class="badge bg-warning text-dark">Mais antigo</span>
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->email_verified_at)
                            <span class="badge bg-success">Sim</span>
                        @else
                            <span class="badge bg-secondary">Não</span>
                        @endif
                    </td>
                    <td>
                        {{ $user->created_at->format('d/m/Y') }}
                        @switch($situacao)
                            @case('novo')
                                <span class="badge bg-info text-dark">Novo</span>
                                @break
                            @case('recente')
                                <span class="badge bg-primary">Recente</span>
                                @break
                            @default
                                <span class="badge bg-dark">Antigo</span>
                        @endswitch
                    </td>
                    <td>
                        <a href="{{ route('users.show', $user) }}"
                           class="btn btn-sm btn-outline-primary">Ver</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Nenhum usuário cadastrado.</td>
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
