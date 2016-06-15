<!-- Extende o app.blade.php e a seção content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Novo Cupom</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.cupoms.store','class'=>'form']) !!}

        <!-- Puxa o formulado _form.blade.php -->
        @include('admin.cupoms._form')


        <div class="form-group">
            {!! Form::submit('Criar Cupom',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
