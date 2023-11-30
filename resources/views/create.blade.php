@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar<h1>
        <hr>

        @if(isset($errors) && count($errors)>0)
        <div class="text-center alert-danger">
            @foreach($errors->all() as $erro)
            {{$erro}}<br>
            @endforeach
        </div>
        @endif

        <hr>
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control" type="text" name="title" placeholder="Título"></input> <br>
            <select name="id_user" id="id_user" class="form-control">
                <option value="">Autor</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select> <br>
            <input class="form-control" type="text" name="pages" placeholder="Páginas"></input> <br>
            <input class="form-control" type="text" name="price" placeholder="Preço"></input> <br>
            <input class="btn btn-primary" type="submit" value="Cadastra"></button> <br>
        </form>
        @endsection