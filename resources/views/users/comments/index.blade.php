@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")
    
@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Comentários do Usuário {{ $user->name }}
    <a href="{{ route('comments.create', $user->id)}}"> + </a>
</h1>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Conteúdo</th>
                <th scope="col">Visível</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment) 
                <tr>
                    <td>{{ $comment->body }}</td>
                    <td>{{ $comment->visible ? 'SIM' : 'NÃO' }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection