<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\CupomRepository;
use CodeDelivery\Http\Requests;
use Illuminate\Http\Request;
use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Http\Requests\AdminCupomRequest;

class CupomsController extends Controller
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
   // private $repository;

    //Método construtor
     public function  __construct(CupomRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $cupoms = $this->repository->paginate();

        return view('admin.cupoms.index', compact('cupoms'));
    }

    public function create()
    {
        return view('admin.cupoms.create');
    }

    public function store(AdminCupomRequest $request)
    {
        $data = $request -> all();
        $this->repository->create($data);

        return redirect()->route('admin.cupoms.index');

    }

    public function edit($id,  CategoryRepository $repository)
    {
        $category = $repository->find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id, CategoryRepository $repository)
    {
        $data = $request -> all();
        $repository->update($data,$id);
        return redirect()->route('admin.categories.index');

    }
}
