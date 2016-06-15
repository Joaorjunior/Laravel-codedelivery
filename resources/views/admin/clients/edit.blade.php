<!-- Extende o app.blade.php e a seção content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Editando cliente: {{$client->user->name}}</h3>

        @include('errors._check')


        {!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}

        <!-- Name Form Input -->

            @include('admin.clients._form')


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
