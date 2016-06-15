<!-- Extende o app.blade.php e a se��o content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Produtos</h3>

        <a href="{{ route('admin.products.create') }}" class="btn btn-default"> Novo produto</a> <br><br>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th> ID </th>
                <th> Produto </th>
                <th> Categoria </th>
                <th> Preco  </th>
                <th> Acao </th>
            </tr>
            </thead>


            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}} </td>
                <td> {{$product->name}} </td>
                <td> {{$product->category->name}} </td>
                <td> {{$product->price}} </td>
                <td>
                    <a href="{{route('admin.products.edit', ['id'=>$product->id])}}" clas="btn btn-default btn-sm">
                        Editar
                    </a>
                    <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}" clas="btn btn-default btn-sm">
                        Remover
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>





        </table>

        {{ $products->render() }}

    </div>


        @endsection
