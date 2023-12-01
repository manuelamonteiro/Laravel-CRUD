@extends('templates.template')

@section('content')
<h1 class="text-center">
    @if(isset($book)) Editar @else Cadastrar @endif
</h1>
<hr>

@if(isset($errors) && count($errors)>0)
<div class="text-center alert-danger">
    @foreach($errors->all() as $erro)
    {{$erro}}<br>
    @endforeach
</div>
@endif

<hr>

@if(isset($book))
<form name="formEdit" id="formEdit" method="POST" action="{{url('books/'.$book->id)}}">
    @method('PUT')
    @else
    <form name="formCad" id="formCad" method="POST" action="{{url('books')}}">
        @endif
        @csrf
        <input class="form-control" type="text" name="title" placeholder="Título"
            value="{{$book->title ?? ''}}"></input> <br>
        <select name="id_user" id="id_user" class="form-control">
            <option value="">Autor</option>
            @foreach($users as $user)
            <option value="{{$user->id}}" @if(isset($book) && $book->relUsers->id == $user->id) selected
                @endif>{{$user->name}}</option>
            @endforeach
        </select> <br>
        <input class="form-control" type="text" name="pages" placeholder="Páginas"
            value="{{$book->pages ?? ''}}"></input> <br>
        <input class="form-control" type="text" name="price" placeholder="Preço" value="{{$book->price ?? ''}}"></input>
        <br>
        <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif"></button>
        <br>
    </form>
    @endsection