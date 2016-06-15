<?php
/**
 * Created by PhpStorm.
 * User: aline
 * Date: 25/05/2016
 * Time: 09:54
 */

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    private $repository;
    /**
     * @var OrderRepository;
     */

    /**
     * @var UserRepository;
     */
    private $userRepository;

    /**
     * @var ProductRepository;
     */
    private $productRepository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        $orders = $this->repository->paginate();
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = [0=>'Pentende', 1=>'A caminho', 2=>'Entregue', 3 =>'Cancelado'];
        $order = $this->repository->find($id);

        $deliveryman = $userRepository->getDeliverymen();

        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->all();
        $this->repository->update($all, $id);

        return redirect()->route('admin.orders.index');
    }


}