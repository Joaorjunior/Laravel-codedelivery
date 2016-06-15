<!-- Extende o app.blade.php e a seção content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Novo Cliente</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.clients.store','class'=>'form']) !!}

        <!-- Puxa o formulado _form.blade.php -->
        @include('admin.clients._form')


        <div class="form-group">
            {!! Form::submit('Novo Cliente',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
