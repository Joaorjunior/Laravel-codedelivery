<!-- Extende o app.blade.php e a seção content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Nova Produto</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.products.store','class'=>'form']) !!}

        <!-- Puxa o formulado _form.blade.php -->
        @include('admin.products._form')


        <div class="form-group">
            {!! Form::submit('Criar Produto',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
