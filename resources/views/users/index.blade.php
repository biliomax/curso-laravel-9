@extends('layouts.app')

@section('title', 'Listagem dos Usuários')
    
@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Listagem de Usuários
</h1>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Criar</th>
                <th scope="col">Editar</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Comentários</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user) 
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.create') }}">Criar</a></td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                    <td><a href="{{ route('users.show', $user->id) }}">Detalhes</a></td>
                    <td><a href="{{ route('comments.index', $user->id) }}">Anotações(0)</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection