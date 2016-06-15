<!-- Extende o app.blade.php e a seção content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Nova Categoria</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.categories.store','class'=>'form']) !!}

        <!-- Puxa o formulado _form.blade.php -->
        @include('admin.categories._form')


        <div class="form-group">
            {!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
