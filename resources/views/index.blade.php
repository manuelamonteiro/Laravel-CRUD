@extends('templates.template')

@section('content')
<h1 class="text-center">Lista</h1>
<hr> <br>

<div class="text-center">
    <a href="{{url('books/create')}}">
        <button type="button" class="btn btn-success">Cadastrar</button>
    </a>
</div> <br>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $books)
            @php
            $user=$books->find($books->id)->relUsers;
            @endphp
            <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$books->title}}</td>
                <td>{{$user->name}}</td>
                <td>{{$books->price}}</td>
                <td>
                    <a href="{{url('books/'.$books->id)}}">
                        <button type="button" class="btn btn-dark">Visualizar</button>
                    </a>
                </td>
                <td>
                    <a href="{{url('books/'.$books->id . '/edit')}}">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="">
                        <button type="button" class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection