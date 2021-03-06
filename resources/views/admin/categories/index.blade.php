<!-- Extende o app.blade.php e a se��o content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Categorias</h3>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-default"> Nova categoria</a> <br><br>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th> ID </th>
                <th> Nome </th>
                <th> Acao </th>
            </tr>
            </thead>


            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}} </td>
                <td> {{$category->name}} </td>
                <td>
                    <a href="{{route('admin.categories.edit', ['id'=>$category->id])}}" clas="btn btn-default btn-sm">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>





        </table>

        {{ $categories->render() }}

    </div>


        @endsection
