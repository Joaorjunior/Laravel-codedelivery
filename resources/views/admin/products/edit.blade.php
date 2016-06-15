<!-- Extende o app.blade.php e a se��o content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Editando produto: {{$product->name}}</h3>

        @include('errors._check')


        {!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}

        <!-- Name Form Input -->

            @include('admin.products._form')


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
