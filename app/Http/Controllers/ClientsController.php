<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\ClientService;


class ClientsController extends Controller
{
    /**
     * @var clientRepository
     */

    private $repository;
    private $clientService;

    //Método construtor
     public function  __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index(ClientRepository $repository)
    {
        $clients = $this->repository->paginate(5);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request)
    {
        //Recebe todos os dados
        $data = $request -> all();
        //Array c/ as informações que esta recebendo via request
        $this->clientService->create($data);
        //Redireciona o usuário para a página inicial
        return redirect()->route('admin.clients.index');

    }

    public function edit($id)
    {
        $client = $this->repository->find($id);
        return view('admin.clients.edit',compact('client'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request -> all();
        $this->clientService->update($data,$id);
        return redirect()->route('admin.clients.index');

    }
}





















