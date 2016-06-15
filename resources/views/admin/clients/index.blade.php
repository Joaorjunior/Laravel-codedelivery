<!-- Extende o app.blade.php e a se��o content de app.blade.php para o index.blade.php -->

@extends('app')
        @section('content')


    <div class="container">
        <h3>Clients</h3>

        <a href="{{ route('admin.clients.create') }}" class="btn btn-default"> Novo Cliente</a> <br><br>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th> ID </th>
                <th> Nome </th>
                <th> Acao </th>
            </tr>
            </thead>


            <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id}} </td>
                <td> {{$client->user->name}} </td>
                <td>
                    <a href="{{route('admin.clients.edit', ['id'=>$client->id])}}" clas="btn btn-default btn-sm">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>





        </table>

        {{ $clients->render() }}

    </div>


        @endsection
