<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * @var OrderRepository;
     */
    private $repository;
    /**
     * @var UserRepository;
     */
    private $userRepository;

    /**
     * @var ProductRepository;
     */
    private $productRepository;

    private $service;



    public function  __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        ProductRepository $productRepository,
        OrderService $service
)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
        $this->service = $service;
    }


    public function index(UserRepository $userRepository)
    {
        $clientId = $userRepository->find(Auth::user()->id)->client->id;
        $orders=$this->repository->scopeQuery(function($query) use($clientId){
            return $query->where('client_id','=',$clientId);
        })->paginate();



        return view('customer.order.index', compact('orders'));
    }


    public function create(ProductRepository $productRepository)
    {
        $products = $productRepository->lists1();

        return view('customer.order.create', compact('products'));
    }

    public function store(Requests\CheckoutRequest$request)
    {
        $data = $request->all();
        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
        $data['client_id'] = $clientId;
        $this->service->create($data);

        return redirect()->route('customer.order.index');


    }
















}