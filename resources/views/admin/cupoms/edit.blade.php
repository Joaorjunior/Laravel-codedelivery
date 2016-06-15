<!-- Extende o app.blade.php e a se��o content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Editando categoria: {{$category->name}}</h3>

        @include('errors._check')


        {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}

        <!-- Name Form Input -->

            @include('admin.categories._form')


        <div class="form-group">
            {!! Form::submit('Salvar Categoria',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}





    </div>

@endsection
