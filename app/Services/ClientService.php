<?php

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientService
{
    /**
     * @var clientRepository
     */

    private $clientRepository;
    /**
     * @var userRepository
     */

    private $userRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository) //Erro no UserRepository (Altera��o no RepositoryServiceProvider)
    {
        $this->clientRepository = $clientRepository;

        $this->userRepository = $userRepository;
    }


    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);

        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;

        $this->userRepository->update($data['user'], $userId);
    }


    public function create(array $data)
    {
        $data['user']['password'] = bcrypt(12345);
        $user = $this->userRepository->create($data['user']);

        $data['user_id'] = $user->id; //User_id do usu�rio

        $this->clientRepository->create($data);



       // $userId = $this->clientRepository->find($id, ['user_id'])->user_id;


    }





}















